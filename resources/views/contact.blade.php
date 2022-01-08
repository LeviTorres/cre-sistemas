@extends('layouts.layout')
@section('title','Contacto')
@section('content')
<div class="content_contact">
    <div class="content_image">
        <div class="title">
            <h1>CONTACTO</h1>
            <p>Llámanos tenemos la solución</p>
        </div>
    </div>
    <div class="contact_call">
        <h2>Dejanos un <span>MENSAJE</span></h2>
    </div>
    <div class="contact">
        <div class="contact_form">
            <form class="form" action="https://formsubmit.co/levi962009@gmail.com"  method="POST" id="form">
                <div class="form_input">
                    <label for="name">Nombre<span> *</span></label>
                    <input class="form_error_input" type="text" name="name" id="name" required minlength="1" title="Nombre requerido" autocomplete="off">
                    <p class="form_error_p" id="name_error"></p>
                </div>
                <div class="form_input">  
                    <label for="email">Correo electrónico<span> *</span></label>
                    <input class="form_error_input" type="email" name="email" id="email" required pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" title="Correo electrónico requerido" autocomplete="off">
                    <p class="form_error_p" id="email_error"></p>
                </div>
                <div class="form_input">
                    <label for="subject">Asunto<span> *</span></label>
                    <input class="form_error_input" type="text" name="subject" id="subject" required minlength="1" title="Asunto requerido" autocomplete="off">
                    <p class="form_error_p" id="subject_error"></p>
                </div>
                
                <div class="form_input_message">
                    <label for="message">Mensaje<span> *</span></label>
                    <textarea class="form_error_input" name="message" name="message" id="message" cols="30" rows="10" required minlength="1" title="Mensaje requerido" autocomplete="off"></textarea>
                    <p class="form_error_p" id="message_error"></p>
                </div>
                <input type="hidden" name="_captcha" value="false">
                <input type="hidden" name="_next" value="http://127.0.0.1:8000/thanks">
                <div class="form_input_button">
                    <button type="submit" class="button">ENVIAR</button>
                </div>  
            </form>
        </div>
        <div class="contact_information">
            <div class="container">
                <div class="content_p">
                    <div>
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div>  
                        <p>Isabel La Catolica #118 Int. 101 piso 1 Col. Vallarta Norte, Guadalajara, Jalisco C.P. 44690</p>
                    </div>
                </div>
                <div class="content_p">
                    <div> 
                        <i class="fas fa-phone"></i>
                    </div>
                    <div>
                        <p>33 14 28 32 26</p>
                    </div>
                </div>
                <div class="content_p">
                    <div>
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div>
                        <p>rubens_m88@hotmail.com</p>
                        <p>cresistemascb@gmail.com</p>
                    </div>
                </div>
                <div class="content_p">
                    <div>
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <div>
                        <p>Ing. Ruben Muños</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection