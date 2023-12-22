@extends('guestevent.layouts')

@section('container')
<style>
    .responsive-table {
        width: 100%;
        border-collapse: collapse;
    }

    .responsive-table th, .responsive-table td {
        border: 0px solid black;
        padding: 20px;
        text-align: center;
    }

    .responsive-table th {
        background-color: #f2f2f2;
    }
    .foto{
            align-items: center;
            margin-top: 20px;
            padding-top: 0pt;
            border-top: 0px;
            /* left: 10px; */
            width: 150px;
            height: auto;
        }

    @media screen and (max-width: 600px) {
        .responsive-table th, .responsive-table td {
            display: block;
            
        }

        .responsive-table th {
            display: none;
        }
    }

    .sub{
        font-family: 'Century', 'Centaur';
        font-size: 20px;
        color: #454B3E;
    }
</style>

<table class="responsive-table">
    <tr>
        <th colspan="3" class="sub">Want to use our digital guestbook service for your event? <br>Here are some of the benefits if you use our digital guestbook!</th>
    </tr>
        <tr>
            <td  style="background-color: #DFE6DA;">
                <img src="{{ asset('images/cu1.jpg') }}" alt="events" class="foto"> <br><br>
                <b class="responsive-table td">The convenience aspect of digital invitations:</b> <br>Replacing physical guestbooks with digital invitations that have customized codes for each guest, making it easier for event owners to manage invitations. The registration process becomes more efficient and the event owners did not need to worry.
            </td>
            <td>
                <img src="{{ asset('images/cu3.jpg') }}" alt="events" class="foto"> <br><br>
                <b bg-color>The guest registration process becomes faster and more efficient with automated logging:</b> <br> No more manual hassle, all guest data can be recorded directly and accurately in the database. Reduce the time required for manual registration and data processing. Event owners can focus on other  aspects without being burdened by heavy administrative tasks.
            </td>
            <td  style="background-color: #DFE6DA;">
                <img src="{{ asset('images/cu5.jpg') }}" alt="events" class="foto"> <br><br>
                <b>Ease of Data Analysis:</b> <br>Through digital guestbooks, event owners can easily analyze attendance data, guest preferences, and other information for better event planning in the future. Provide a more modern and convenient experience for guests with an efficient and less time-consuming registration system.
            </td>
        </tr>
        <tr>
            <td>
                <img src="{{ asset('images/cu2.jpg') }}" alt="events" class="foto"> <br><br>
                <b>With a special code system, the security of your event is guaranteed: </b> <br> Only guests with coded invitations can access the event, providing extra protection against unwanted intrusion.
            </td>
            <td  style="background-color: #DFE6DA;">
                <img src="{{ asset('images/cu4.jpg') }}" alt="events" class="foto"> <br><br>
                <b>Environmentally Friendly:</b> <br> Reduce paper usage and create an eco-friendly event. By switching to a digital guestbook, you are contributing to environmental conservation efforts. This reduces the need for paper forms and other documents that can ultimately contribute to the amount of paper wasted.
            </td>
            <td>
                <img src="{{ asset('images/cu6.jpg') }}" alt="events" class="foto"> <br><br>
                <b>Make it easier for visitors to access documentation: </b> <br>The digital guestbook is equipped with a link that leads directly to google drive where the photographer uploads all the photos that have been taken. visitors can download the photos if they want. 
            </td>
        </tr>
    </table>
    <footer class="text-center py-3" style="background-color: #65705A;">
        <p style="color: white;">Want to use our digital guestbook service for your event? Register now.</p>
        <p style="color: white;">Click the button below to register an account or login to your account!.</p>
        <div id="liveAlertPlaceholder"></div>
            <a href="{{ url('login') }}" class="btn btn-primary">Signup</a>    
        </div>
    </footer>
@endsection