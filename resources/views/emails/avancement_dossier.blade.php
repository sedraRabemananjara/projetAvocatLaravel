{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <title>Mail</title>
</head>
<div id="header">
        <h5> Cabinet Razafimahefa </h5>

      <h5>  Village des jeux </h5> 
    
      <h5> Emmeuble Regus </h5> 
     
      <h5> Numero: +261  </h5> 
     
      <h5> Addresse mail: cab-razafimahefa@email.com </h5> 
</div>      
<body>
  
   <h1 style="text-align: center" class="heading-section">{{$data['client'] }}</h1>
      <h2 style="" class="heading-section">Procedure: {{$data['procedure']}}</h2>  
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
          <section class="ftco-section">
            <h2 style="text-decoration: underline" class="heading-section">Dérnière convocation:</h2> 
            <h3 style="" class="heading-section">Motif:</h3>
              <p class="word">{{$data['motif'] }}</p>
            <h3 style="" class="heading-section">Conclusion:</h3>
              <p class="word"> {{$data['espace_conclusion'] }} </p>
            
            <h2 style="text-decoration: underline" class="heading-section">Prochaine convocation:</h2> 
            <h4 style="font-style: bold" class="heading-section">Date: {{$data['date_agenda'] }}</h4>
              
            <h4 style="font-style: bold" class="heading-section">Salle:  {{$data['salle'] }} </h4>
              
            <h4 style="text-decoration: underline" class="heading-section">Motif de la convocation:</h4>
            <p class="word"> {{$data['nouveaumotif'] }}  </p>
          </section>
</body>
</html> --}}

{{-- @component('mail::message')
    Cabinet Razafimahefa

    Village des jeux

    Immeuble Regus

    Procedure: {{ $enregistrement['procedure'] }}

    @if ($precedentAgenda != null)
        @component('mail::panel')
            Dérnière convocation : $precedentAgenda->date_agenda
            Motif : $precedentAgenda->motif
            Salle : $precedentAgenda->salle
        @endcomponent
    @endif

    @component('mail::panel')
        Prochain convocation : $prochainAgenda->date_agenda
        Motif : $prochainAgenda->motif
        Salle : $prochainAgenda->salle
    @endcomponent

@endcomponent --}}

<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml"
    xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio - Responsive Email Template</title>
    <style type="text/css">
        /* ----- Custom Font Import ----- */
        @import url(https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic&subset=latin,latin-ext);

        /* ----- Text Styles ----- */
        table {
            font-family: 'Lato', Arial, sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-font-smoothing: antialiased;
            font-smoothing: antialiased;
        }

        @media only screen and (max-width: 700px) {

            /* ----- Base styles ----- */
            .full-width-container {
                padding: 0 !important;
            }

            .container {
                width: 100% !important;
            }

            /* ----- Header ----- */
            .header td {
                padding: 30px 15px 30px 15px !important;
            }

            /* ----- Projects list ----- */
            .projects-list {
                display: block !important;
            }

            .projects-list tr {
                display: block !important;
            }

            .projects-list td {
                display: block !important;
            }

            .projects-list tbody {
                display: block !important;
            }

            .projects-list img {
                margin: 0 auto 25px auto;
            }

            /* ----- Half block ----- */
            .half-block {
                display: block !important;
            }

            .half-block tr {
                display: block !important;
            }

            .half-block td {
                display: block !important;
            }

            .half-block__image {
                width: 100% !important;
                background-size: cover;
            }

            .half-block__content {
                width: 100% !important;
                box-sizing: border-box;
                padding: 25px 15px 25px 15px !important;
            }

            /* ----- Hero subheader ----- */
            .hero-subheader__title {
                padding: 80px 15px 15px 15px !important;
                font-size: 35px !important;
            }

            .hero-subheader__content {
                padding: 0 15px 90px 15px !important;
            }

            /* ----- Title block ----- */
            .title-block {
                padding: 0 15px 0 15px;
            }

            /* ----- Paragraph block ----- */
            .paragraph-block__content {
                padding: 25px 15px 18px 15px !important;
            }

            /* ----- Info bullets ----- */
            .info-bullets {
                display: block !important;
            }

            .info-bullets tr {
                display: block !important;
            }

            .info-bullets td {
                display: block !important;
            }

            .info-bullets tbody {
                display: block;
            }

            .info-bullets__icon {
                text-align: center;
                padding: 0 0 15px 0 !important;
            }

            .info-bullets__content {
                text-align: center;
            }

            .info-bullets__block {
                padding: 25px !important;
            }

            /* ----- CTA block ----- */
            .cta-block__title {
                padding: 35px 15px 0 15px !important;
            }

            .cta-block__content {
                padding: 20px 15px 27px 15px !important;
            }

            .cta-block__button {
                padding: 0 15px 0 15px !important;
            }
        }
    </style>

    <!--[if gte mso 9]><xml>
   <o:OfficeDocumentSettings>
    <o:AllowPNG/>
    <o:PixelsPerInch>96</o:PixelsPerInch>
   </o:OfficeDocumentSettings>
  </xml><![endif]-->
</head>

<body style="padding: 0; margin: 0;" bgcolor="#eeeeee">
    <span
        style="color:transparent !important; overflow:hidden !important; display:none !important; line-height:0px !important; height:0 !important; opacity:0 !important; visibility:hidden !important; width:0 !important; mso-hide:all;">Voici
        les dernières mises à jour à propos de votre dossier.</span>

    <table class="full-width-container" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%"
        bgcolor="#eeeeee" style="width: 100%; height: 100%; padding: 30px 0 30px 0;">
        <tr>
            <td align="center" valign="top">
                <!-- / 700px container -->
                <table class="container" border="0" cellpadding="0" cellspacing="0" width="700" bgcolor="#ffffff"
                    style="width: 700px;">
                    <tr>
                        <td align="center" valign="top">
                            <!-- / Header -->
                            <table class="container header" border="0" cellpadding="0" cellspacing="0"
                                width="620" style="width: 620px;">
                                <tr>
                                    <td style="padding: 30px 0 30px 0; border-bottom: solid 1px #eeeeee;"
                                        align="left">
                                        <a href="#"
                                            style="font-size: 30px; text-decoration: none; color: #000000;">Cabinet
                                            Razafimahefa</a>
                                    </td>
                                </tr>
                            </table>
                            <!-- /// Header -->

                            <!-- / Hero subheader -->
                            <table class="container hero-subheader" border="0" cellpadding="0" cellspacing="0"
                                width="620" style="width: 620px;">
                                <tr>
                                    <td class="hero-subheader__title"
                                        style="font-size: 43px; font-weight: bold; padding: 80px 0 15px 0;"
                                        align="left">{{ $enregistrement->pour }}</td>
                                </tr>

                                <tr>
                                    <td class="hero-subheader__content"
                                        style="font-size: 16px; line-height: 27px; color: #969696; padding: 0 60px 90px 0;"
                                        align="left">Voici les dernières mises à jour à propos de votre dossier.</td>
                                </tr>
                            </table>
                            <!-- /// Hero subheader -->

                            @if ($precedentAgenda != null)
                                <!-- / Title -->
                                <table class="container title-block" border="0" cellpadding="0" cellspacing="0"
                                    width="100%">
                                    <tr>
                                        <td align="center" valign="top">
                                            <table class="container" border="0" cellpadding="0" cellspacing="0"
                                                width="620" style="width: 620px;">
                                                <tr>
                                                    <td style="border-bottom: solid 1px #eeeeee; padding: 35px 0 18px 0; font-size: 26px;"
                                                        align="left">Dernière convocation</td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                                <!-- /// Title -->

                                <!-- / Paragraph -->
                                <table class="container paragraph-block" border="0" cellpadding="0" cellspacing="0"
                                    width="100%">
                                    <tr>
                                        <td align="center" valign="top">
                                            <table class="container" border="0" cellpadding="0" cellspacing="0"
                                                width="620" style="width: 620px;">
                                                <tr>
                                                    <td class="paragraph-block__content"
                                                        style="padding: 25px 0 18px 0; font-size: 16px; line-height: 27px; color: #969696;"
                                                        align="left">
                                                        <p>Date: {{ $precedentAgenda->date_agenda }}</p>
                                                        <p>Motif: {{ $precedentAgenda->motif }}</p>
                                                        <p>Salle: {{ $precedentAgenda->salle }}</p>
                                                        <a href="{{ $fichierPrecedentAgenda }}">Derniere conclusion</a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                                <!-- /// Paragraph -->
                            @endif



                            <!-- / Title -->
                            <table class="container title-block" border="0" cellpadding="0" cellspacing="0"
                                width="100%">
                                <tr>
                                    <td align="center" valign="top">
                                        <table class="container" border="0" cellpadding="0" cellspacing="0"
                                            width="620" style="width: 620px;">
                                            <tr>
                                                <td style="border-bottom: solid 1px #eeeeee; padding: 35px 0 18px 0; font-size: 26px;"
                                                    align="left">Prochaine convocation</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <!-- /// Title -->



                            <!-- / Paragraph -->
                            <table class="container paragraph-block" border="0" cellpadding="0" cellspacing="0"
                                width="100%">
                                <tr>
                                    <td align="center" valign="top">
                                        <table class="container" border="0" cellpadding="0" cellspacing="0"
                                            width="620" style="width: 620px;">
                                            <tr>
                                                <td class="paragraph-block__content"
                                                    style="padding: 25px 0 18px 0; font-size: 16px; line-height: 27px; color: #969696;"
                                                    align="left">
                                                    <p>Date: {{ $prochainAgenda->date_agenda }}</p>
                                                    <p>Motif: {{ $prochainAgenda->motif }}</p>
                                                    <p>Salle: {{ $prochainAgenda->salle }}</p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <!-- /// Paragraph -->

                            <!-- / Divider -->
                            <table class="container" border="0" cellpadding="0" cellspacing="0" width="100%"
                                style="padding-top: 25px;" align="center">
                                <tr>
                                    <td align="center">
                                        <table class="container" border="0" cellpadding="0" cellspacing="0"
                                            width="620" align="center"
                                            style="border-bottom: solid 1px #eeeeee; width: 620px;">
                                            <tr>
                                                <td align="center">&nbsp;</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <!-- /// Divider -->

                            {{-- <!-- / Info Bullets -->
                            <table class="container info-bullets" border="0" cellpadding="0" cellspacing="0"
                                width="100%" align="center">
                                <tr>
                                    <td align="center">
                                        <table class="container" border="0" cellpadding="0" cellspacing="0"
                                            width="620" align="center" style="width: 620px;">
                                            <tr>
                                                <td class="info-bullets__block" style="padding: 30px 30px 15px 30px;"
                                                    align="center">
                                                    <table class="container" border="0" cellpadding="0"
                                                        cellspacing="0" align="center">
                                                        <tr>
                                                            <td class="info-bullets__icon"
                                                                style="padding: 0 15px 0 0;">
                                                                <img src="img/img13.png">
                                                            </td>

                                                            <td class="info-bullets__content"
                                                                style="color: #969696; font-size: 16px;">
                                                                contact@example.com</td>
                                                        </tr>
                                                    </table>
                                                </td>

                                                <td class="info-bullets__block" style="padding: 30px 30px 15px 30px;"
                                                    align="center">
                                                    <table class="container" border="0" cellpadding="0"
                                                        cellspacing="0" align="center">
                                                        <tr>
                                                            <td class="info-bullets__icon"
                                                                style="padding: 0 15px 0 0;">
                                                                <img src="img/img11.png">
                                                            </td>

                                                            <td class="info-bullets__content"
                                                                style="color: #969696; font-size: 16px;">(541) 754-3010
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="info-bullets__block" style="padding: 30px;"
                                                    align="center">
                                                    <table class="container" border="0" cellpadding="0"
                                                        cellspacing="0" align="center">
                                                        <tr>
                                                            <td class="info-bullets__icon"
                                                                style="padding: 0 15px 0 0;">
                                                                <img src="img/img12.png">
                                                            </td>

                                                            <td class="info-bullets__content"
                                                                style="color: #969696; font-size: 16px;">New York, 222
                                                                West 23rd</td>
                                                        </tr>
                                                    </table>
                                                </td>

                                                <td class="info-bullets__block" style="padding: 30px;"
                                                    align="center">
                                                    <table class="container" border="0" cellpadding="0"
                                                        cellspacing="0" align="center">
                                                        <tr>
                                                            <td class="info-bullets__icon"
                                                                style="padding: 0 15px 0 0;">
                                                                <img src="img/img12.png">
                                                            </td>

                                                            <td class="info-bullets__content"
                                                                style="color: #969696; font-size: 16px;">Paris, Champ
                                                                de Mars 54</td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <!-- /// Info Bullets --> --}}


                            <!-- / Footer -->
                            <table class="container" border="0" cellpadding="0" cellspacing="0" width="100%"
                                align="center">
                                <tr>
                                    <td align="center">
                                        <table class="container" border="0" cellpadding="0" cellspacing="0"
                                            width="620" align="center"
                                            style="border-top: 1px solid #eeeeee; width: 620px;">
                                            <tr>
                                                <td style="text-align: center; padding: 50px 0 10px 0;">
                                                    <a href="#"
                                                        style="font-size: 28px; text-decoration: none; color: #d5d5d5;">Cabinet
                                                        Razafimahefa</a>
                                                </td>
                                            </tr>

                                            {{-- <tr>
                                                <td align="middle">
                                                    <table width="60" height="2" border="0"
                                                        cellpadding="0" cellspacing="0"
                                                        style="width: 60px; height: 2px;">
                                                        <tr>
                                                            <td align="middle" width="60" height="2"
                                                                style="background-color: #eeeeee; width: 60px; height: 2px; font-size: 1px;">
                                                                <img src="img/img16.jpg">
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr> --}}
                                            <tr>
                                                <td
                                                    style="color: #d5d5d5; text-align: center; font-size: 15px; padding: 10px 0 60px 0; line-height: 22px;">
                                                    Copyright &copy; <a href="#" target="_blank"
                                                        style="text-decoration: none; border-bottom: 1px solid #d5d5d5; color: #d5d5d5;">Cabinet
                                                        Razafimahefa</a>.
                                                    <br />All rights reserved.
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <!-- /// Footer -->
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
