<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\SiteFormEmail;
use App\Models\SiteForm;
use Illuminate\Http\Request;

class SiteFormController extends Controller
{

    public function index(Request $request)
    {
        $siteForm = SiteForm::all();
        return response()->json($siteForm, 200);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $req = $request->all();

            $userInfo = [
                'first_name' => $req['first_name'],
                'last_name' => $req['last_name'],
                'email' => $req['email'],
                'country_code' => $req['country_code'],
                'phone_number' => $req['phone_number'],
                'service' => $req['service'],
                'message' => $req['message'],
            ];

            $toEmail = "info@andes-workforce.com";

            SiteForm::create($request->all());

            Mail::to($toEmail)->send(
                new SiteFormEmail($userInfo)
            );

            if (count(Mail::failures()) > 0) {
                return response()->json(['message' => 'Error al enviar el correo'], 500);
            }

            return response()->json(['message' => 'Email succesfully sent'], 200);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
