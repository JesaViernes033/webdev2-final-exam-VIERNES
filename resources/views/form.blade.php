<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!--bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet"> 

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
             body {
                font-family: 'Nunito', sans-serif;
                background: url('https://images.pexels.com/photos/1112048/pexels-photo-1112048.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');
                background-repeat: no-repeat;
                background-size:cover;
                color:white;
                text-align: center;
            }
            #wrapper {
                background: rgb(0, 0, 0);
                background: rgba(0, 0, 0, 0.3);
                border-radius: 20px;
                width: 700px;
                margin: auto;
                margin-top: -20px; 
                padding-top: 25px;
                padding-bottom: 25px;
                font-size:20px;
            }

           
            input {   
                border-radius: 5px;
                font-size: 1rem;
                margin: 0.25rem;
                padding: 0.5rem;
                transition: 0.5s ease-out;
                width: 300px;
                position: right;
                }
            .col-25 {
                float: left;
                width: 40%;
                margin-top: 6px;
                
                }
            .col-75 {
                float: left;
                width: 75px;
                margin-top: 6px;
                }

            .row:after {
                content: "";
                display: table;
                clear: both;
                margin-right:50px;
                }

            footer{
                margin-bottom:20px;
            }
               

            
        </style>
        
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

            <h2><strong>Bible Study Request Form</strong></h2>

                <div id="ourmanna-verse">
                            <div id="mannaverse-container">
                                <p id="mannaverse">
                                    For God so loved the world that he gave his one and only Son, that whoever believes in him shall not perish but have eternal life.
                                </p>
                                <p id="mannaverse-reference">
                                    John 3:16
                                    <small id="mannaverse-version"><i>(KJV)</i></small>
                                </p>
                            </div>
                        </div><br>

                <div id="wrapper">    
                      
                            <form action="/bible-study-request-create-form" method="POST" class="">
                                @csrf
                                    <input type="hidden" value="{{ $biblestudy->id }}" name="id" >

                                <div class="row">
                                    <div class="col-25">
                                        <label for="complete_name" class="typefield-label " style="text-align: left;">Complete Name </label>
                                    </div> 
                                    <div class="col-75">
                                        <input type="text" value="{{ $biblestudy->complete_name }}"  name="complete_name" ><br>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-25">
                                            <label for="email_address" class="typefield-label" style="text-align: left;">Email Address </label> 
                                    </div>
                                    <div class="col-75">
                                        <input type="email" value="{{ $biblestudy->email_address }}"  name="email_address" ><br>
                                    </div>
                                </div>

                                    <div class="row">
                                        <div class="col-25">
                                            <label for="contact_number" class="typefield-label" style="text-align: left;">Contact Number </label> 
                                        </div> 
                                        <div class="col-75">
                                            <input type="number" value="{{ $biblestudy->contact_number }}"  name="contact_number" ><br>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-25">
                                            <label for="birthdate" class="typefield-label" style="text-align: left;">Birthdate </label> 
                                        </div>
                                        <div class="col-75">
                                            <input type="date" value="{{ $biblestudy->birthdate }}"  name="birthdate" ><br>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-25">
                                            <label for="religious_affiliation" class="typefield-label" style="text-align: left;">Religious Affiliation </label> 
                                        </div>
                                        <div class="col-75">
                                            <input type="text" value="{{ $biblestudy->religious_affiliation }}"  name="religious_affiliation" ><br>
                                        </div>
                                     </div>

                                    <div class="row">
                                        <div class="col-25">
                                            <label for="bible_study_date" class="typefield-label" style="text-align: left;">Bible Study Date </label> 
                                        </div>
                                        <div class="col-75">
                                            <input type="date" value="{{ $biblestudy->bible_study_date }}"  name="bible_study_date" ><br>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-25">
                                            <label for="bible_study_time" class="typefield-label" style="text-align: left;">Bible Study Time </label> 
                                        </div>
                                        <div class="col-75">
                                            <input type="time" value="{{ $biblestudy->bible_study_time }}"  name="bible_study_time" ><br>
                                        </div>
                                    </div>  


                                     <div class="row">
                                        <div class="col-25">
                                            <label for="bible_study_location" class="typefield-label" style="text-align: left;">Bible Study Location<br>/Address </label>
                                        </div> 
                                        <div class="col-75">
                                            <input type="text" value="{{ $biblestudy->bible_study_location }}"  name="bible_study_location" ><br>
                                        </div>
                                    </div>

                                    <br> 
                                    <button type="submit" class=" btn btn-primary btn-m " >Submit</button> 

                                    </form>
                        
                            </div>
                </div>            
             </div>

   
    </body>

    <footer>
            <p style="font-size:15px;"> @Copyright 2021 WEBDEV2 Finals </p>
            Follow me on: 
            <a href="https://www.facebook.com/JesaMirallesViernes/"><img src="https://cdn3.iconfinder.com/data/icons/capsocial-round/500/facebook-512.png" class="icon-style" alt="Github icon" width = "20px" height = "20px"></a>
            <a href="https://github.com/JesaViernes033"><img src="https://image.flaticon.com/icons/png/512/25/25231.png" class="icon-style" alt="Github icon" width = "20px" height = "20px"></a>
            <a href="https://gmail.google.com/"><img src="https://cdn3.iconfinder.com/data/icons/logos-brands-3/24/logo_brand_brands_logos_gmail-512.png" class="icon-style" alt="Email icon" width = "20px" height = "20"></a>
            <a href="https://www.youtube.com/"><img src="https://www.iconpacks.net/icons/2/free-youtube-logo-icon-2431-thumb.png" class="icon-style" alt="Email icon" width = "25px" height = "25"></a>
        </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="http://www.ourmanna.com/verses/api/js/?order=random" type="text/javascript"></script>

</html>