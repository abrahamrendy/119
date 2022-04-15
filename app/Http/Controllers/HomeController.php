<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use QrCode;
use DNS2D;
use Storage;
use Image;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $count = DB::table('registrant')->count(); //COUNT JEMAAT
        $limit = false;
        if ($count >= 350) {
            $limit = true;
        }
        return view('home',['limit'=>$limit]);
    }

    public function verificator()
    {
        return view('verificator');
    }

    public function success($code) {
        return view('success', ['code' => $code]);
    }

    public function register (Request $request) {
        $email = strip_tags($request->input('email'));
        $name = strip_tags($request->input('name'));
        $age = strip_tags($request->input('age'));
        $phone = strip_tags($request->input('phone'));
        $status = strip_tags($request->input('status'));

        $create_date = date('Y-m-d H:i:s' , strtotime('now'));

        $isExist = DB::table('registrant')->where('email',$email)->first();

        if (empty($isExist)) {
            $insertID = DB::table('registrant')->insertGetId(
                                            ['email' => $email,
                                             'name' => $name,
                                             'age' => $age,
                                             'phone' => $phone,
                                             'status' => $status,
                                             'type' => 0,
                                             'create_date' => $create_date
                                            ] );

            $current_timestamp = strtotime($create_date);
            $firstChar = substr($email, 0, 1);
            $combine = strtoupper($firstChar).$insertID.'-'.$current_timestamp;
            if ($insertID) {
                DB::table('registrant')->where('id',$insertID)->update(
                                                                        [
                                                                         'registration_code' => $combine
                                                                        ] );
            }

            // SET UP EMAIL
            Storage::disk('public')->put('qrcodes/'.$combine.'.jpg',base64_decode(DNS2D::getBarcodePNG($combine, "QRCODE", 10,10)));
            // $this->sendRegisterEmail($email, $combine, $name);
            // return view('success', ['code' => $combine]);
            return redirect()->route('success', ['code' => $combine]);
        } else {
            return view('fail');
        }
    }

    public function scan (Request $request) {
        $registration_code = strip_tags($request->input('registration_code'));
        $create_date = date('Y-m-d H:i:s' , strtotime('now'));

        $isExist = DB::table('temp_verification')->where('registration_code',$registration_code)->first();

        if (!$isExist) {
            $insertID = DB::table('temp_verification')->insertGetId(
                                                ['registration_code' => $registration_code,
                                                 'create_date' => $create_date
                                                ] );
            if ($insertID) {
                \Session::flash('success', $registration_code . ' has been verified!');
                return back();
            } else {
                abort(500, 'Internal server error.');
            }
        } else {
            \Session::flash('fail', $registration_code .  ' has been verified before.');
            return back();
        }
    }

    public function sendRegisterEmail ($to,$code,$name) {
        $url = url('/');
        $subject = 'Your Gratitude - Worship Night with Sydney Mohede Ticket';
        $message = '<html>
                        <head>
                            <title>Gratitude | Worship Night with Sidney Mohede</title>
                        </head>
                        <body>
                            <table width=700px style="background-color:#453939; padding:40px 40px">
                                <tr>
                                    <td>
                                        <table width=100% style="background-color: #443E3E; padding:20px 20px;font-family: sans-serif;color: #fff">
                                            <tr><td><br>
                                            <tr>
                                                <td align="center">
                                                    <p>
                                                    <h1 style="word-break: break-word;">E-Ticket</h1>
                                                    <h3 style="word-break: break-word;">Gratitude - Worship Night with Sidney Mohede</h3>
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div style="display: inline-block;width: 100%">
                                                        <img src="https://gratitude.gbisukawarna.org/img/GRATITUDE%20E-TICKET-02.jpg" width="100%">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center">
                                                    <p>
                                                        Cetak atau tunjukkan lembar ini untuk melakukan penukaran dengan gelang masuk area concert.
                                                    </p>
                                                    <hr>
                                                    <p>
                                                        <i>Print or show this receipt to exchange with entrance ticket.</i>
                                                    </p>
                                                    <br>
                                                    <div style="background-color: #fff; display: inline-block; padding: 15px;">
                                                        <img src="'.asset('img/qrcodes/'.$code.'.png').'"></img>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr><td><br>
                                            <tr><td><br>

                                            <tr>
                                                <td>
                                                    <p style="color: #848484; font-size: 15px">
                                                        Ticket Details:
                                                    </p>
                                                    <p style="line-height: 20px;">
                                                        <b>Registration Code: '.$code.'</b>
                                                        <br>
                                                        Registration Name: '.$name.'
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr><td><br>
                                            <tr>
                                                <td>
                                                    <p style="color: #848484; font-size: 15px">
                                                        Concert Venue:
                                                    </p>
                                                    <p style="line-height: 20px;">
                                                        Location: <b>GBI Sukawarna cab. Aruna</b>
                                                        <br>
                                                        Address: <b>Aruna no.19</b>
                                                        <br>
                                                        Date: <b>10 October 2019, 7:00 PM</b>
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr><td><br>
                                            <tr><td><br>
                                            <tr>
                                                <td>
                                                    <div style="
                                                    background-color: #F36E23;
                                                    font-family: sans-serif;
                                                    position: relative;
                                                    text-align: center;
                                                    color: white;
                                                    border-color: #F36E23 !important;
                                                    border-width: 1px;
                                                    border-radius: 3px;
                                                    border-style: solid;
                                                    -webkit-transition: all 0.5s;
                                                    -o-transition: all 0.5s;
                                                    transition: all 0.5s;
                                                    padding: 10px;
                                                    ">
                                                        Konter Penukaran E-Ticket dibuka mulai <b>pkl 17.00</b>.
                                                        <hr>
                                                        E-Ticket Exchange Counter open at <b>5:00 PM</b>.
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr><td><br>
                                            <tr>
                                                <td>
                                                    <div style="
                                                    background-color: #F36E23;
                                                    font-family: sans-serif;
                                                    position: relative;
                                                    text-align: center;
                                                    color: white;
                                                    border-color: #F36E23 !important;
                                                    border-width: 1px;
                                                    border-radius: 3px;
                                                    border-style: solid;
                                                    -webkit-transition: all 0.5s;
                                                    -o-transition: all 0.5s;
                                                    transition: all 0.5s;
                                                    padding: 10px;
                                                    ">
                                                        <div>
                                                        </div>
                                                        <div>
                                                            <b>Informasi.</b> Pintu dibuka 1 jam sebelum acara dimulai.
                                                            <hr>
                                                            <b>Information.</b> Door Open 1 hour before start time.
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr><td><br>
                                            <tr><td><br>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </body>
                    </html>';
        $type = 'html'; // or HTML
        $charset = 'utf-8';

        // Headers
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1';
        $headers[] = 'From: GBI Sukawarna <gbisukawarna@gbisukawarna.org>';
        //End of send email//
        return mail($to, $subject, $message, implode("\r\n", $headers));                                                                              
    }
}
