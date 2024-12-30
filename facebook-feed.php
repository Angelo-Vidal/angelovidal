<!-- Sección de Facebook Feed -->
<div class="bg-gradient-to-b from-gray-50 to-white py-16">
    <div class="container mx-auto">
        <!-- Encabezado mejorado -->
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">
                Síguenos en Facebook
                <span class="block text-red-500 mt-2">Municipalidad de Quemchi</span>
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto leading-relaxed mb-8">
                Mantente informado de todas las noticias y actividades de la
                Municipalidad de Quemchi
            </p>
        </div>

        <!-- Contenedor del Feed con marco personalizado -->
        <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-2xl overflow-hidden">
            <!-- Cabecera personalizada -->
            <div class="bg-red-500 p-4">
                <div class="flex items-center space-x-4">
                    <div class="bg-white p-2 rounded-full">
                        <svg class="h-8 w-8 text-red-500" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                        </svg>
                    </div>
                    <div class="text-white">
                        <h3 class="text-xl font-bold">Municipalidad de Quemchi</h3>
                        <p class="text-sm opacity-90">Página Oficial</p>
                    </div>
                </div>
            </div>

            <!-- Feed de Facebook -->
            <div class="p-4 flex justify-center items-center">
                <div class="fb-page" data-href="https://web.facebook.com/municipalidaddequemchi" data-tabs="timeline"
                    data-width="500" data-height="600" data-small-header="true" data-adapt-container-width="true"
                    data-hide-cover="false" data-show-facepile="true">
                </div>
            </div>

            <!-- Botón de acción -->
            <div class="p-4 bg-gray-50 border-t border-gray-100">
                <a href="https://web.facebook.com/municipalidaddequemchi" target="_blank"
                    class="block w-full bg-red-500 hover:bg-red-600 text-white text-center py-3 px-4 rounded-lg transition-colors duration-300">
                    <span class="font-medium">Visitar nuestra página de Facebook</span>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- SDK de Facebook -->
<div id="fb-root"></div>
<script>
window.fbAsyncInit = function() {
    FB.init({
        xfbml: true,
        version: 'v18.0'
    });
};

(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v18.0';
    js.nonce = 'tu_nonce_aquí'; // Reemplaza con tu nonce real si es necesario
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

<!-- Estilos adicionales para responsividad -->
<style>
.fb-page {
    width: 100% !important;
    max-width: 500px !important;
    margin: 0 auto !important;
}

.fb-page span,
.fb-page iframe {
    width: 100% !important;
    max-width: 500px !important;
    margin: 0 auto !important;
}

@media (max-width: 576px) {

    .fb-page,
    .fb-page span,
    .fb-page iframe {
        max-width: 100% !important;
    }
}
</style>