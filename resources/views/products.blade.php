@extends('layouts.layout')
@section('title','Nuestros productos')
@section('content')
<div class="content_products">
    <div class="content_products_image">
        <div class="title_products">
            <h1>NUESTROS PRODUCTOS</h1>
        </div>
    </div>
    <div class="paragraph_products">
        <p>CRE Sistemas de Control y bombeo, le ofrece los mejores productos de control y bombeo de acuerdo a sus necesidades. Le ofrecemos asesoría, mantenimiento y reparación para todos nuestros productos.</p>
    </div> 
    <div class="content_information_products_first">
        <div class="card">
            <div class="card_information">
                <div class="title_card">
                    <h1>Bombas sumergibles para pozo</h1>
                    <hr>
                </div>
                <div class="paragraph_card">
                    <p>Equipos sumergibles para pozos profundos y sistemas de presurización de agua.</p>
                </div>
            </div>
            <div class="img_card">
                <img src="/assets/bomba-sumergible.png">
            </div>
        </div>
    </div>
    <div class="content_information_products_second">
        <div class="card" id="card_two">
            <div class="img_card">
                <img src="/assets/gobernacion.jpg">
            </div>
            <div class="card_information">
                <div class="title_card">
                    <h1>Gobernación y Generación</h1>
                    <hr>
                </div>
                <div class="paragraph_card">
                    <p>Equipos de gobernación y generación tanto mecánicos como electrónicos utilizados en las áreas de ingenios
                         de geotérmicas, plantas de luz, turbinas de gas y vapor, etc.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="content_information_products_third">
        <div class="card">
            <div class="card_information">
                <div class="title_card">
                    <h1>Bombas centrifugas verticales Multietapas</h1>
                    <hr>
                </div>
                <div class="paragraph_card">
                    <p>Equipo de bombas centrifugas verticales multietapas para el manejo de agua limpia en equipos presurizadores de 
                        alta presión para abastecimiento de agua en edificios como hoteles, departamentos, centros comerciales y doméstico.
                    </p>
                </div>
            </div>
            <div class="img_card">
                <img src="/assets/multietapa.jpg">
            </div>
        </div>
    </div>
    <div class="content_information_products_first">
        <div class="card" id="card_fourth">
            <div class="img_card">
                <img src="/assets/image4.webp">
            </div>
            <div class="card_information">
                <div class="title_card">
                    <h1>Bombas verticales tipo turbina</h1>
                    <hr>
                </div>
                <div class="paragraph_card">
                    <p>Equipos diseñados especialmente para operar en pozos, cárcamos o sumideros. El cojunto de tazones consiste principalmente en un cuerpo hidráulico, un tazón de succión
                        y uno de descarga. El conjunto de la bomba se coloca en el sumidero o pozo a una profundidad de inmersión para proporcionar la adecuada sumergencia de operación.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="content_information_products_second">
        <div class="card">
            <div class="card_information">
                <div class="title_card">
                    <h1>Bombas sumergibles para Cárcamo</h1>
                    <hr>
                </div>
                <div class="paragraph_card">
                    <p>
                        Equipos sumergibles para cárcamo de aguas residuales y aguas con sólidos en suspensión.
                    </p>
                </div>
            </div>
            <div class="img_card">
                <img src="/assets/sumergible.jpg">
            </div>
        </div>
    </div>
    <div class="content_information_products_third">
        <div class="card" id="card_sixth">
            <div class="img_card">
                <img src="/assets/tablero.png">
            </div>
            <div class="card_information">
                <div class="title_card">
                    <h1>Tableros de control</h1>
                    <hr>
                </div>
                <div class="paragraph_card">
                    <p>
                        Equipos de control y protección, como arrancadores ATP, ATR, y estado sólido y variadores de frecuencia.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="content_information_products_first">
        <div class="card">
            <div class="card_information">
                <div class="title_card">
                    <h1>Bombas centrifugas horizontales</h1>
                    <hr>
                </div>
                <div class="paragraph_card">
                    <p>
                        Equipo de motobomba centrifuga para todo tipo de procesos industriales, minería, agrícolas y residenciales para manejo de cualquier tipo de fluido y altas capacidades.
                    </p>
                </div>
            </div>
            <div class="img_card">
                <img src="/assets/horizontal.jpg">
            </div>
        </div>
    </div>
    <div class="content_information_products_second">
        <div class="card" id="card_eighth">
            <div class="img_card">
                <img src="/assets/hidroneumatico.png">
            </div>
            <div class="card_information">
                <div class="title_card">
                    <h1>Equipo e Hidroneumático</h1>
                    <hr>
                </div>
                <div class="paragraph_card">
                    <p>
                        Equipo e hidroneumático con bombas centrifugas, bombas verticales multietapas, bombas sumergibles con tablero alternado simultaneado y/o variadores de velocidad.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="content_information_products_third">
        <div class="card">
            <div class="card_information">
                <div class="title_card">
                    <h1>Bombas contra incendio</h1>
                    <hr>
                </div>
                <div class="paragraph_card">
                    <p>
                        Equipo contra incendio de bombeo listado y aprobado UL FM y equipos armados nacionales (bombas verticales y/o bombas horizontales).
                    </p>
                </div>
            </div>
            <div class="img_card">
                <img src="/assets/incendio.jpg">
            </div>
        </div>
    </div>
</div>
@endsection