@extends('layouts.layout')
@section('title','Inicio')
@section('content')
<div class="container_main">
    <div class="homepage">
        <div class="inner-homepage flex">
            <h1 class="h1_homepage">CRE</h1>
            <h1 class="subtitle_homepage">Sistemas de Control y Bombeo</h1>
        </div>
        
        <div>
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
            <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
            <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
            <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
            </g>
            </svg>
        </div>
    </div>
    <div class="container">
        <div class="container_body">
            <div class="container_title">
                <i class="fas fa-box-open"></i> 
                <h1>NUESTROS PRODUCTOS</h1>
            </div>
            <div class="container_items">
                <div class="container_card">
                    <div class="container_picture">
                        <img src="/assets/incendio.jpg" alt="">
                    </div>
                    <div class="container_card_title">
                        <h2>Bombas contra incendio</h2>
                    </div>
                    <div class="container_card_subtitle">
                        <p>
                            Equipo contra incendio de bombeo listado y aprobado UL FM, y equipos armados nacionales (bombas verticales y/o bombas horizontales).
                        </p>
                    </div>
                </div>
                <div class="container_card">
                    <div class="container_picture">
                        <img src="/assets/hidroneumatico.png" alt="">
                    </div>
                    <div class="container_card_title">
                        <h2>Equipo e Hidroneumático</h2>
                    </div>
                    <div class="container_card_subtitle">
                        <p>
                            Equipo e Hidroneumático con bombas centrifugas, bombas verticales multietapas, bombas sumergibles, con tablero alternado simultaneado y/o variadores de velocidad.                            
                        </p>
                    </div>
                </div>
                <div class="container_card">
                    <div class="container_picture">
                        <img src="/assets/horizontal.jpg" alt="">
                    </div>
                    <div class="container_card_title">
                        <h2>Bombas centrifugas horizontales</h2>
                    </div>
                    <div class="container_card_subtitle">
                        <p>
                            Equipo de motobomba centrifuga para todo tipo de procesos industriales, minería, agrícolas y residenciales para manejo de cualquier tipo de fluido y altas capacidades.
                        </p>
                    </div>
                </div>
                <div class="container_card">
                    <div class="container_picture">
                        <img src="/assets/tablero.png" alt="">
                    </div>
                    <div class="container_card_title">
                        <h2>Tableros de control</h2>
                    </div>
                    <div class="container_card_subtitle">
                        <p>
                            Equipos de control y protección, como arrancadores ATP, ATR y estado sólido y variadores de frecuencia.
                        </p>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    <div class="container_trademarks">
        <div class="container_body_trademarks">
            <div class="container_title_trademarks">
                <i class="fas fa-store"></i>
                <h1>NUESTRAS MARCAS</h1>
            </div>
            <div class="container_items_trademarks">
                <div class="container_card_trademarks">
                    <div class="container_picture_trademarks">
                        <img src="/assets/woodward.png" alt="">
                    </div>
                </div>
                <div class="container_card_trademarks">
                    <div class="container_picture_trademarks">
                        <img src="/assets/flowserve.png" alt="">
                    </div>
                </div>
                <div class="container_card_trademarks">
                    <div class="container_picture_trademarks">
                        <img src="/assets/altamira.jpg" alt="">
                    </div>
                </div>
                <div class="container_card_trademarks">
                    <div class="container_picture_trademarks">
                        <img src="/assets/hidrocontrol.jpg" alt="">
                    </div>
                </div> 
                <div class="container_card_trademarks">
                    <div class="container_picture_trademarks">
                        <img src="/assets/aquapak.jpg" alt="">
                    </div>
                </div> 
                <div class="container_card_trademarks">
                    <div class="container_picture_trademarks">
                        <img src="/assets/warson.jpg">
                    </div>
                </div> 
                <div class="container_card_trademarks">
                    <div class="container_picture_trademarks">
                        <img src="/assets/goulds.png" alt="">
                    </div>
                </div> 
                <div class="container_card_trademarks">
                    <div class="container_picture_trademarks">
                        <img src="/assets/espa.jpg" alt="">
                    </div>
                </div> 
            </div>
        </div>
    </div>
</div>
@endsection