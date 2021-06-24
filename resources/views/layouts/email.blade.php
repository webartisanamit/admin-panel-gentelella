<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta property="og:title" content="Verify Your Email">
    <title>{{ config('app.name') }}</title>
    <style type="text/css">
        #outlook a{ padding:0; }
        body { width:100% !important; -webkit-text-size-adjust:none; margin:0; padding:0; }
        .ReadMsgBody { width:100%; }
        .ExternalClass {
            width:100%;
        }
        img {
            border:0;
            height:auto;
            line-height:100%;
            outline:none;
            text-decoration:none;
        }
        table td {
            border-collapse:collapse;
        }

        #backgroundTable{
            height:100% !important;
            margin:0;
            padding:0;
            width:100% !important;
        }

        body, #backgroundTable{
            background-color:#FAFAFA;
        }

        #templateContainer{
            border:1px none #DDDDDD;
        }

        #templatePreheader{
            background-color:#FAFAFA;
        }

        .text-center {
            text-align:center !important;
        }
        .text-left {
            text-align:left !important;
        }
        .text-right {
            text-align:right !important;
        }

        h1,.h1, h2,.h2, h3,.h3, h4,.h4 {
            color:#202020;
            display:block;
            font-weight:bold;
            font-family:'Nunito Sans', sans-serif;
            margin-right:0;
            margin-left:0;
        }

        h1,.h1{
            font-size:24px;
            line-height:100%;
            margin-top:20px;
            margin-bottom:20px;
        }

        h2,.h2{
            font-size:30px;
            margin-top:0;
            margin-bottom:10px;
        }

        h3,.h3{
            font-size:26px;
            margin-top:0;
            margin-bottom:10px;
        }

        h4,.h4{
            font-size:22px;
            margin-top:0;
            margin-bottom:10px;
        }

        .preheaderContent div {
            color:#505050;
            font-family:'Nunito Sans', sans-serif;
            font-size:10px;
            line-height:100%;
            text-align:left;
        }

        .preheaderContent div a:link,.preheaderContent div a:visited,.preheaderContent div a .yshortcuts {
            color:#52C1B3;
            font-weight:normal;
            text-decoration:underline;
        }

        .preheaderContent img{
            display:inline;
            height:auto;
            margin-bottom:10px;
            max-width:280px;
        }

        #templateHeader{
            background-color:#FFFFFF;
            border-bottom:0;
        }

        #headerImage{
            height:auto;
            max-width:400px !important;
        }

        #templateContainer,.bodyContent{
            background-color:#FFFFFF;
        }

        .headerContent{
            color:#202020;
            font-family:'Nunito Sans', sans-serif;
            font-size:34px;
            font-weight:bold;
            line-height:100%;
            padding:0;
            text-align:left;
            vertical-align:middle;
            background-color: #52c1b34d;
            padding-bottom: 14px;
        }

        .headerContent a:link,.headerContent a:visited,.headerContent a .yshortcuts {
            color:#52C1B3;
            font-weight:normal;
            text-decoration:underline;
        }

        .bodyContent div{
            color:#505050;
            font-family:'Nunito Sans', sans-serif;
            font-size:14px;
            line-height:150%;
            text-align:left;
        }

        .bodyContent div a:link,.bodyContent div a:visited,.bodyContent div a .yshortcuts {
            color:#52C1B3;
            font-weight:normal;
            text-decoration:underline;
        }

        .bodyContent img{
            display:inline;
            height:auto;
            margin-bottom:10px;
            max-width:280px;
        }

        #templateFooter{
            background-color:#FFFFFF;
            border-top:0;
        }

        .footerContent {
            background-color: #fafafa;
        }

        .footerContent div{
            color:#707070;
            font-family:'Nunito Sans', sans-serif;
            font-size:11px;
            line-height:150%;
            text-align:left;
        }

        .footerContent div a:link,.footerContent div a:visited,.footerContent div a .yshortcuts {
            color:#52C1B3;
            font-weight:normal;
            text-decoration:underline;
        }
        .footerContent img{
            display:inline;
        }

        #social {
            background-color:#FAFAFA;
            border:0;
        }

        #social div{
            text-align:left;
        }

        #utility{
            background-color:#FFFFFF;
            border:0;
        }

        #utility div{
            text-align:left;
        }

        #monkeyRewards img{
            display:inline;
            height:auto;
            max-width:280px;
        }

        .buttonText {
            color: #fff;
            background: #52C1B3;
            text-decoration: none;
            font-weight: normal;
            display: block;
            border-radius: 100px;
            padding: 14px 80px;
            font-family:'Nunito Sans', sans-serif
            font-size: 18px;
        }

        #supportSection, .supportContent {
            background-color: white;
            font-family:'Nunito Sans', sans-serif;
            font-size: 12px;
            border-top: 1px solid #52C1B3;
        }

        .bodyContent table {
            padding-bottom: 10px;
        }

        .footerContent p {
            margin: 0;
            margin-top: 2px;
        }

        .headerContent.centeredWithBackground {
            text-align: center;
            padding-top: 20px;
            padding-bottom: 20px;
        }
        .tableWidth {
            width: 500px;
        }
    </style>
</head>

<body>
    <center>
        <table id="backgroundTable">
            <tr>
                <td align="center">
                    <table id="templatePreheader" class="tableWidth">
                        <tr>
                            <td valign="top" class="preheaderContent">
                                <table>
                                    <tr>
                                        <td valign="top"> </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    <table border="0" cellpadding="0" cellspacing="0" class="tableWidth" id="templateContainer">
                        <tr>
                            <td align="center" valign="top">
                                <table border="0" cellpadding="0" cellspacing="0" class="tableWidth" id="templateHeader">
                                    <tr>
                                        <td class="headerContent centeredWithBackground">
                                            <img width="130" src="{{ asset('website/images/logo-2.png') }}" id="headerImage campaign-icon">
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" valign="top">
                                <table border="0" cellpadding="0" cellspacing="0" class="tableWidth" id="templateBody">
                                    <tr>
                                        <td valign="top" class="bodyContent">
                                            @yield('content')
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" valign="top">
                                <table border="0" cellpadding="10" cellspacing="0" class="tableWidth" id="supportSection">
                                    <tr>
                                        <td valign="top" class="supportContent">
                                            <table border="0" cellpadding="10" cellspacing="0" width="100%">
                                                <tr>
                                                    <td valign="top" width="100%">
                                                        <br>
                                                        <div> <p class="text-center">Copyright © 2021 | All rights reserved &nbsp; </p> </div>
                                                        <br>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    <br>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>
