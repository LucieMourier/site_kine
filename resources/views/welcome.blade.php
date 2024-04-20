<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Boubals Lucie - Masseur Kinésithérapeute</title>
        <link rel="stylesheet" href="assets/css/tailwind.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" integrity="sha512-7x3zila4t2qNycrtZ31HO0NnJr8kg2VI67YLoRSyi9hGhRN66FHYWr7Axa9Y1J9tGYHVBPqIjSE1ogHrJTz51g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>

    <body class="bg-gray-100">
        
        <section class="py-10 md:py-16 mt-4">

            <div class="container max-w-screen-xl mx-auto px-4" id="header-page">
                <!--<nav class="flex items-center justify-between mb-40">
                    <img src="assets/image/navbar-logo.png" alt="Logo">
                    <button class="px-7 py-3 md:px-9 md:py-4 bg-white font-medium md:font-semibold text-gray-700 text-md rounded-md hover:bg-gray-700 hover:text-white transition ease-linear duration-500">Get my CV</button>
                </nav>-->

                <div class="text-center">
                    <div class="flex flex-col md:flex-row justify-center items-center md:items-start mb-16">
                        <img src="assets/image/home-img.png" alt="Image" class="md:mr-8 md:mb-0">
                        <div>
                            <h5 class="font-medium text-gray-600 text-lg md:text-2xl uppercase mb-8">Boubals Lucie</h5>
                            <h4 class="font-normal text-gray-900 text-4xl md:text-7xl leading-none mb-8">Masseur-Kinésithérapeute</h4>
                            <p class="font-normal text-gray-600 text-md md:text-xl mb-8">
                                Spécialisée en kinésithérapie pédiatrique et drainage lymphatique. 
                                Basé sur Jonquieres et Sainte-Ceciles je vous acceuille lundi, mardi, jeudi et vendredi.
                                Mon engagement est d'offrir des soins doux et adaptés pour favoriser le bien-être de mes patients.</p>
                           
                            <div class="flex flex-col md:flex-row md:justify-center md:gap-4">
                                <a href="#pediatrie" class="block w-full md:w-auto px-3 py-2 md:px-4 md:py-2 font-medium md:font-semibold bg-gray-700 text-gray-50 text-sm rounded-md hover:bg-gray-50 hover:text-gray-700 transition ease-linear duration-500 mb-4 md:mb-0">
                                    En savoir plus sur la pédiatrie
                                </a>
                                <a href="#drainage" class="block w-full md:w-auto px-3 py-2 md:px-4 md:py-2 font-medium md:font-semibold bg-gray-700 text-gray-50 text-sm rounded-md hover:bg-gray-50 hover:text-gray-700 transition ease-linear duration-500">
                                    En savoir plus sur le drainage
                                </a>
                            </div>



                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!-- PEDIATRIE -->
        <section class="py-10 md:py-16">

            <div class="container max-w-screen-xl mx-auto px-4" id="pediatrie">
                <h1 class="font-medium text-gray-700 text-3xl md:text-4xl mb-12 text-center">Pédiatrie</h1>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-gray-50 px-8 py-10 rounded-md">
                        <div class="w-20 py-6 flex justify-center bg-gray-100 rounded-md mb-4">
                            <i data-feather="activity"></i>
                        </div>

                        <h4 class="font-medium text-gray-700 text-lg mb-4">Rééducation motrice</h4>

                        <p class="font-normal text-gray-500 text-md">Travail sur la rééducation motrice des enfants, en les aidant à développer leur force, leur coordination, leur équilibre et leur motricité globale. Cela peut inclure des exercices thérapeutiques, des jeux et des activités visant à améliorer les mouvements et les fonctions musculaires des enfants.</p>
                    </div>
                    
                    <div class="bg-gray-50 px-8 py-10 rounded-md">
                        <div class="w-20 py-6 flex justify-center bg-gray-100 rounded-md mb-4">
                            <i data-feather="codesandbox"></i>
                        </div>

                        <h4 class="font-medium text-gray-700 text-lg mb-4">Traitement des troubles musculosquelettiques </h4>

                        <p class="font-normal text-gray-500 text-md">Les enfants peuvent souffrir de divers troubles musculosquelettiques tels que des torticolis, des pieds bots, des déformations de la colonne vertébrale, etc. Les kinésithérapeutes pédiatriques travaillent à traiter ces troubles en utilisant des techniques spécifiques telles que des massages, des étirements, des exercices de renforcement et des orthèses si nécessaire.</p>
                    </div>
                    
                    <div class="bg-gray-50 px-8 py-10 rounded-md">
                        <div class="w-20 py-6 flex justify-center bg-gray-100 rounded-md mb-4">
                            <i data-feather="coffee"></i>
                        </div>

                        <h4 class="font-medium text-gray-700 text-lg mb-4">Gestion de la douleur et des conditions neurologiques</h4>

                        <p class="font-normal text-gray-500 text-md">Certains enfants peuvent souffrir de conditions neurologiques telles que la paralysie cérébrale, les lésions médullaires, les accidents vasculaires cérébraux, etc. Les kinésithérapeutes pédiatriques aident à gérer la douleur et à améliorer la fonction motrice de ces enfants en travaillant sur des techniques de rééducation spécifiques, des dispositifs d'assistance et des stratégies de gestion de la douleur.</p>
                    </div>
                </div>

            </div>

        </section>

        <!-- DRAINAGE -->
        <section class="py-10 md:py-16">

            <div class="container max-w-screen-xl mx-auto px-4" id="drainage">
                <h1 class="font-medium text-gray-700 text-3xl md:text-4xl mb-12 text-center">Drainage Lymphatique</h1>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-gray-50 px-8 py-10 rounded-md">
                        <div class="w-20 py-6 flex justify-center bg-gray-100 rounded-md mb-4">
                            <i data-feather="activity"></i>
                        </div>

                        <h4 class="font-medium text-gray-700 text-lg mb-4">Drainage lymphatique manuel (DLM)</h4>

                        <p class="font-normal text-gray-500 text-md">Cette méthode consiste en des mouvements spécifiques effectués par un praticien qualifié pour stimuler la circulation lymphatique et favoriser le drainage des liquides excédentaires. Le DLM peut être réalisé à la main ou à l'aide d'appareils spécialisés.</p>
                    </div>
                    
                    <div class="bg-gray-50 px-8 py-10 rounded-md">
                        <div class="w-20 py-6 flex justify-center bg-gray-100 rounded-md mb-4">
                            <i data-feather="codesandbox"></i>
                        </div>

                        <h4 class="font-medium text-gray-700 text-lg mb-4">Drainage lymphatique mécanique (DLMé)</h4>

                        <p class="font-normal text-gray-500 text-md">Cette technique utilise des dispositifs mécaniques, tels que des appareils de pressothérapie ou des bottes de compression pneumatique, pour appliquer une pression externe contrôlée sur les tissus et les vaisseaux lymphatiques. Cela aide à augmenter le flux lymphatique et à réduire l'œdème.</p>
                    </div>
                    
                    <div class="bg-gray-50 px-8 py-10 rounded-md">
                        <div class="w-20 py-6 flex justify-center bg-gray-100 rounded-md mb-4">
                            <i data-feather="coffee"></i>
                        </div>

                        <h4 class="font-medium text-gray-700 text-lg mb-4">Drainage lymphatique par électrostimulation (DLE)</h4>

                        <p class="font-normal text-gray-500 text-md">Cette méthode utilise des appareils d'électrostimulation pour stimuler les muscles et les vaisseaux lymphatiques. Les impulsions électriques déclenchent des contractions musculaires, ce qui favorise la circulation lymphatique et le drainage des toxines et des liquides.</p>
                    </div>
                </div>

            </div>

        </section>

        <!-- <section class="py-10 md:py-16">

            <div class="container max-w-screen-xl mx-auto px-4">

                <div class="flex flex-col lg:flex-row justify-between">
                    <div class="mb-10 lg:mb-0">
                        <h1 class="font-medium text-gray-700 text-3xl md:text-4xl mb-5">Portfolio</h1>

                        <p class="font-normal text-gray-500 text-xs md:text-base">I have brought here my biggest and favorite works <br> as a professional.</p>
                    </div>

                    <div class="space-y-24">
                        <div class="flex space-x-6">
                            <h1 class="font-normal text-gray-700 text-3xl md:text-4xl">01</h1>

                            <span class="w-28 h-0.5 bg-gray-300 mt-5"></span>

                            <div>
                                <h1 class="font-normal text-gray-700 text-3xl md:text-4xl mb-5">Demo API Generator</h1>

                                <p class="font-normal text-gray-500 text-sm md:text-base">A dummy data free and documented API generator to facilitate <br> the process of testing the front-end portion of projects.</p>
                            </div>
                        </div>
                        
                        <div class="flex space-x-6">
                            <h1 class="font-normal text-gray-700 text-3xl md:text-4xl">02</h1>

                            <span class="w-28 h-0.5 bg-gray-300 mt-5"></span>

                            <div>
                                <h1 class="font-normal text-gray-700 text-3xl md:text-4xl mb-5">Demo API Generator</h1>

                                <p class="font-normal text-gray-500 text-sm md:text-base">A dummy data free and documented API generator to facilitate <br> the process of testing the front-end portion of projects.</p>
                            </div>
                        </div>
                        
                        <div class="flex space-x-6">
                            <h1 class="font-normal text-gray-700 text-3xl md:text-4xl">03</h1>

                            <span class="w-28 h-0.5 bg-gray-300 mt-5"></span>

                            <div>
                                <h1 class="font-normal text-gray-700 text-3xl md:text-4xl mb-5">Demo API Generator</h1>

                                <p class="font-normal text-gray-500 text-sm md:text-base">A dummy data free and documented API generator to facilitate <br> the process of testing the front-end portion of projects.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section>-->

        <!-- FORMATION -->
        <section class="py-10 md:py-16">

            <div class="container max-w-screen-xl mx-auto px-4">

                <h1 class="font-medium text-gray-700 text-3xl md:text-4xl mb-5">Formations</h1>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-gray-50 px-8 py-10 rounded-md">
                        <h4 class="font-medium text-gray-700 text-lg mb-4">2015 – 2016</h4>

                        <p class="font-normal text-gray-500 text-md mb-4">Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit, sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua.</p>

                        <div class="relative">
                            <h6 class="font-semibold text-gray-500 text-md relative z-10">See the place here</h6>
                            <span class="w-32 h-1 bg-blue-200 absolute bottom-1 left-0 z-0"></span>
                        </div>
                    </div>

                    <div class="bg-gray-50 px-8 py-10 rounded-md">
                        <h4 class="font-medium text-gray-700 text-lg mb-4">2015 – 2016</h4>

                        <p class="font-normal text-gray-500 text-md mb-4">Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit, sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua.</p>

                        <div class="relative">
                            <h6 class="font-semibold text-gray-500 text-md relative z-10">See the place here</h6>
                            <span class="w-32 h-1 bg-blue-200 absolute bottom-1 left-0 z-0"></span>
                        </div>
                    </div>

                    <div class="bg-gray-50 px-8 py-10 rounded-md">
                        <h4 class="font-medium text-gray-700 text-lg mb-4">2015 – 2016</h4>

                        <p class="font-normal text-gray-500 text-md mb-4">Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit, sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua.</p>

                        <div class="relative">
                            <h6 class="font-semibold text-gray-500 text-md relative z-10">See the place here</h6>
                            <span class="w-32 h-1 bg-blue-200 absolute bottom-1 left-0 z-0"></span>
                        </div>
                    </div>

                    <div class="bg-gray-50 px-8 py-10 rounded-md">
                        <h4 class="font-medium text-gray-700 text-lg mb-4">2015 – 2016</h4>

                        <p class="font-normal text-gray-500 text-md mb-4">Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit, sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua.</p>

                        <div class="relative">
                            <h6 class="font-semibold text-gray-500 text-md relative z-10">See the place here</h6>
                            <span class="w-32 h-1 bg-blue-200 absolute bottom-1 left-0 z-0"></span>
                        </div>
                    </div>

                    <div class="bg-gray-50 px-8 py-10 rounded-md">
                        <h4 class="font-medium text-gray-700 text-lg mb-4">2015 – 2016</h4>

                        <p class="font-normal text-gray-500 text-md mb-4">Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit, sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua.</p>

                        <div class="relative">
                            <h6 class="font-semibold text-gray-500 text-md relative z-10">See the place here</h6>
                            <span class="w-32 h-1 bg-blue-200 absolute bottom-1 left-0 z-0"></span>
                        </div>
                    </div>

                    <div class="bg-gray-50 px-8 py-10 rounded-md">
                        <h4 class="font-medium text-gray-700 text-lg mb-4">2015 – 2016</h4>

                        <p class="font-normal text-gray-500 text-md mb-4">Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit, sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua.</p>

                        <div class="relative">
                            <h6 class="font-semibold text-gray-500 text-md relative z-10">See the place here</h6>
                            <span class="w-32 h-1 bg-blue-200 absolute bottom-1 left-0 z-0"></span>
                        </div>
                    </div>
                </div>

            </div>

        </section>

        <!--<section class="py-10 md:py-16">

            <div class="container max-w-screen-xl mx-auto px-4">

                <div class="text-center">
                    <h1 class="font-normal text-gray-300 text-3xl md:text-6xl lg:text-7xl mb-20 md:mb-32 lg:mb-48">Please do not measure your skills in <br> percentages!</h1>

                    <p class="font-medium text-gray-700 text-xs md:text-base">In my many years of experience, I use @laravel for backend projects and @vuejs for <br> front-end projects. I’m an avid programmer, so I create designs based on the <br> weekend @figmadesign.</p>
                </div>

            </div>

        </section>-->

        <!-- FORMATIONS
        <section class="py-10 md:py-16">

            <div class="container max-w-screen-xl mx-auto px-4">

                <h1 class="font-medium text-gray-700 text-3xl md:text-4xl mb-5">Formation</h1>

                <p class="font-normal text-gray-500 text-xs md:text-base mb-20">Below is a summary of the places I studied</p>

                <div class="flex flex-col lg:flex-row justify-between">
                    <div class="space-y-8 md:space-y-16 mb-16 md:mb-0">
                        <h6 class="font-medium text-gray-400 text-base uppercase">Company</h6>

                        <p class="font-semibold text-gray-600 text-base">Massa Fames <span class="font-normal text-gray-300">/ New York</span></p>

                        <p class="font-semibold text-gray-600 text-base">Massa Fames <span class="font-normal text-gray-300">/ New York</span></p>

                        <p class="font-semibold text-gray-600 text-base">Massa Fames <span class="font-normal text-gray-300">/ New York</span></p>

                        <p class="font-semibold text-gray-600 text-base">Massa Fames <span class="font-normal text-gray-300">/ New York</span></p>

                        <p class="font-semibold text-gray-600 text-base">Massa Fames <span class="font-normal text-gray-300">/ New York</span></p>
                    </div>

                    <div class="space-y-8 md:space-y-16 mb-16 md:mb-0">
                        <h6 class="font-medium text-gray-400 text-base uppercase">Position</h6>

                        <p class="font-normal text-gray-400 text-base">Junior Front-End Developer</p>

                        <p class="font-normal text-gray-400 text-base">Junior Front-End Developer</p>

                        <p class="font-normal text-gray-400 text-base">Junior Front-End Developer</p>

                        <p class="font-normal text-gray-400 text-base">Junior Front-End Developer</p>

                        <p class="font-normal text-gray-400 text-base">Junior Front-End Developer</p>
                    </div>

                    <div class="space-y-8 md:space-y-16">
                        <h6 class="font-medium text-gray-400 text-base uppercase">Year</h6>

                        <p class="font-normal text-gray-400 text-base">2016</p>

                        <p class="font-normal text-gray-400 text-base">2016</p>

                        <p class="font-normal text-gray-400 text-base">2016</p>

                        <p class="font-normal text-gray-400 text-base">2016</p>

                        <p class="font-normal text-gray-400 text-base">2016</p>
                    </div>
                </div>
                
            </div>

        </section>-->

        <!--<section class="py-10 md:py-16">

            <div class="container max-w-screen-xl mx-auto px-4">

                <h1 class="font-medium text-gray-700 text-3xl md:text-4xl mb-5">Brands</h1>

                <p class="font-normal text-gray-500 text-xs md:text-base mb-10 md:mb-20">Below is a summary of the places I studied</p>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                    <img src="assets/image/brand-1.png" alt="Image">

                    <img src="assets/image/brand-2.png" alt="Image">

                    <img src="assets/image/brand-3.png" alt="Image">

                    <img src="assets/image/brand-4.png" alt="Image">

                    <img src="assets/image/brand-5.png" alt="Image">

                    <img src="assets/image/brand-6.png" alt="Image">
                </div>

            </div>

        </section>-->

        <!--<section class="py-10 md:py-16">

            <div class="container max-w-screen-xl mx-auto px-4">

                <h1 class="font-medium text-gray-700 text-3xl md:text-4xl mb-5">Testimonial</h1>

                <p class="font-normal text-gray-500 text-xs md:text-base mb-10 md:mb-20">Below is a summary of the places I studied</p>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-gray-50 px-8 py-10 rounded-md">

                        <p class="font-normal text-gray-500 text-md mb-4">Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit, sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua.</p>

                        <h6 class="font-semibold text-gray-500 text-md">Stephan Clark <span class="font-medium text-gray-300 text-sm">- CEO at EarlyBird</span></h6>
                    </div>

                    <div class="bg-gray-50 px-8 py-10 rounded-md">

                        <p class="font-normal text-gray-500 text-md mb-4">Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit, sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua.</p>

                        <h6 class="font-semibold text-gray-500 text-md">Stephan Clark <span class="font-medium text-gray-300 text-sm">- CEO at EarlyBird</span></h6>
                    </div>

                    <div class="bg-gray-50 px-8 py-10 rounded-md">

                        <p class="font-normal text-gray-500 text-md mb-4">Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit, sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua.</p>

                        <h6 class="font-semibold text-gray-500 text-md">Stephan Clark <span class="font-medium text-gray-300 text-sm">- CEO at EarlyBird</span></h6>
                    </div>

                    <div class="bg-gray-50 px-8 py-10 rounded-md">

                        <p class="font-normal text-gray-500 text-md mb-4">Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit, sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua.</p>

                        <h6 class="font-semibold text-gray-500 text-md">Stephan Clark <span class="font-medium text-gray-300 text-sm">- CEO at EarlyBird</span></h6>
                    </div>

                    <div class="bg-gray-50 px-8 py-10 rounded-md">

                        <p class="font-normal text-gray-500 text-md mb-4">Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit, sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua.</p>

                        <h6 class="font-semibold text-gray-500 text-md">Stephan Clark <span class="font-medium text-gray-300 text-sm">- CEO at EarlyBird</span></h6>
                    </div>

                    <div class="bg-gray-50 px-8 py-10 rounded-md">

                        <p class="font-normal text-gray-500 text-md mb-4">Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit, sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua.</p>

                        <h6 class="font-semibold text-gray-500 text-md">Stephan Clark <span class="font-medium text-gray-300 text-sm">- CEO at EarlyBird</span></h6>
                    </div>
                </div>

            </div>

        </section>-->

        <footer class="py-10 md:py-16 bg-black text-white">
            <div class="container max-w-screen-xl mx-auto px-4 flex flex-col md:flex-row items-center justify-between">
                
                <div class="text-center md:text-center md:mb-0 lg:mb-0">
                    <p>Cabinet Jonquière</p>
                    <p>Rue du Village, 84250 Jonquière</p>
                </div>

                <!-- Divider vertical sur desktop -->
                <hr class="md:hidden border-white my-4 w-full">

                <div class="text-center md:mb-0 lg:mb-0">
                    <p>Horaires</p>
                    <p>Lundi: 9h - 18h30</p>
                    <p>Mardi: 9h - 18h30</p>
                    <p>Jeudi: 9h - 18h30</p>
                    <p>Vendredi: 9h - 18h30</p>
                </div>

                <!-- Divider vertical sur desktop et divider horizontal sur mobile -->
                <hr class="md:hidden border-white my-4 w-full">

                <div class="text-center">
                    <p>Cabinet Sainte-Cécile-les-Vignes</p>
                    <p>Rue des Poilus, 84290 Sainte-Cécile-les-Vignes</p>
                </div>
            </div>
        </footer>




        <script>
            feather.replace()
        </script>

    </body>
</html>