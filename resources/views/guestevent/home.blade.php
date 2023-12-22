@extends('guestevent.layouts')

@section('container')
<style>
        .welcome{
            color: #655446;
            padding: 8pt;
            border-left: 7px solid #655446;
            margin-top: 55px;
            margin-left: 20px;
            text-align: left;
            font-family: 'Georgia', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-size: 50px;
        }
        .subwelcome{
            color: #655446;
            padding: 8pt;
            border-left: 7px solid #655446;
            margin-left: 20px;
            text-align: left;
            font-family: 'Garamond', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-size: 50px;
            margin-bottom: 80px;
        }
        .subsub{
            text-align: center;
            color: #655446;
            font-family: 'Garamond', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-size: 30px;
        }
        .foto{
            margin-top: 90px;
            width: 97%;
            height: auto;

        }
    </style>
<div class="row">
    <div class="col-md-6">
        <div class="welcome">
            <h1> WELCOME TO GUESTEVENT</h1>
            <h2>Embellish every moment of the event! </h2>
        </div>
        <div class="subwelcome">
            <h4>
            We create digital guestbooks to give you <br>an optimal experience at your events.
            <br><br>GuE, your digital guestbook companion, <br> is designed to elevate your events to the next level. <br> Streamline the guest registration process, <br>capture memorable moments,<br>and create a seamless experience for hosts and <br>attendees.
            </h4>
        </div>
    </div>
    <div class="col-md-6">
        <img src="{{ asset('images/ilustrasi.png') }}" alt="Logo GuE" class="foto">
    </div>
</div>
    <footer class="text-center py-3" style="background-color: #65705A;">
        <h5 style="color: white;">Say goodbye to traditional guestbooks,</h5>
        <h5 style="color: white;">and welcome the future of event engagement with GuE. <br></h5>
        <p style="color: white;"> <br>&copy; 2023 GuestEvent. All rights reserved.</p>
    </footer>
@endsection