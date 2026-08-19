<!DOCTYPE html>
<html lang="pt-BR" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz Energética e Fontes de Energia</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-slate-950 text-slate-100 min-h-screen flex flex-col antialiased selection:bg-emerald-500 selection:text-slate-950">

    <!-- HEADER / NAVBAR -->
    <header class="fixed top-0 left-0 right-0 z-50 bg-slate-900/90 backdrop-blur-md border-b border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
            <div class="flex items-center space-x-3">
                <div class="p-2 bg-emerald-500/10 rounded-xl border border-emerald-500/20 text-emerald-400">
                    <i class="fa-solid fa-bolt text-xl"></i>
                </div>
                <span class="font-bold text-lg text-white tracking-tight"> Fontes de Energias & Matrizes</span>
            </div>

            <!-- Menu Desktop -->
            <nav class="hidden md:flex space-x-6 text-sm font-medium text-slate-300">
                <a href="#fontes" class="hover:text-emerald-400 transition">Renováveis vs Não Renováveis</a>
                <a href="#matriz" class="hover:text-emerald-400 transition">Matriz Energética</a>
            </nav>

            <button onclick="toggleMobileMenu()" class="md:hidden text-slate-300 hover:text-white focus:outline-none">
                <i class="fa-solid fa-bars text-xl" id="menuIcon"></i>
            </button>
        </div>

        <!-- Menu Mobile -->
        <div id="mobileMenu" class="hidden md:hidden bg-slate-900 border-b border-slate-800 px-4 pt-2 pb-4 space-y-2">
            <a href="#fontes" onclick="toggleMobileMenu()" class="block py-2 text-slate-300 hover:text-emerald-400">Renováveis vs Não Renováveis</a>
            <a href="#matriz" onclick="toggleMobileMenu()" class="block py-2 text-slate-300 hover:text-emerald-400">Matriz Energética</a>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section class="pt-28 pb-16 md:pt-36 md:pb-24 px-4 max-w-7xl mx-auto text-center relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-emerald-500/10 to-sky-500/10 blur-3xl -z-10"></div>
        <span class="px-4 py-1.5 rounded-full text-xs font-semibold bg-emerald-500/10 text-emerald-400 border border-emerald-500/30 uppercase tracking-widest inline-block mb-4">
            Trabalho Física
        Profª Ana Paula 
            </span>
        <h1 class="text-4xl md:text-6xl font-extrabold text-white tracking-tight max-w-4xl mx-auto leading-tight">
            Fontes de Energia e <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 to-sky-400">Matrizes Energéticas</span>
        </h1>
        <p class="mt-6 text-lg md:text-xl text-slate-400 max-w-2xl mx-auto font-normal">
            Uma análise sobre o funcionamento, vantagens e impactos das fontes energéticas no Brasil e no Mundo.
        </p>
        <div class="mt-8 flex flex-wrap justify-center gap-4">
            <a href="#fontes" class="px-6 py-3 rounded-xl font-semibold bg-emerald-500 hover:bg-emerald-600 text-slate-950 transition shadow-lg shadow-emerald-500/20">
                Explorar Fontes de Energia
            </a>
            <a href="#matriz" class="px-6 py-3 rounded-xl font-semibold bg-slate-800 hover:bg-slate-700 text-slate-200 border border-slate-700 transition">
                Ver Matrizes Energéticas
            </a>
        </div>
    </section>

    <!-- SEÇÃO: FONTES RENOVÁVEIS VS NÃO RENOVÁVEIS -->
    <section id="fontes" class="py-16 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold text-white">Fontes de Energia</h2>
                <p class="text-slate-400 mt-2">Classificação, características, vantagens e desvantagens de cada fonte.</p>
            </div>

            <!-- Botões das Abas -->
            <div class="flex justify-center mb-8 gap-4">
                <button id="btnRenovaveis" onclick="switchTab('renovaveis')" class="px-6 py-2.5 rounded-xl font-semibold bg-emerald-500 text-slate-950 transition shadow-lg shadow-emerald-500/20 flex items-center gap-2">
                    <i class="fa-solid fa-leaf"></i> Renováveis
                </button>
                <button id="btnNaoRenovaveis" onclick="switchTab('naoRenovaveis')" class="px-6 py-2.5 rounded-xl font-semibold bg-slate-800 text-slate-400 hover:text-white transition flex items-center gap-2">
                    <i class="fa-solid fa-fire"></i> Não Renováveis
                </button>
            </div>

            <!-- Conteúdo Aba 1: Renováveis -->
            <div id="tabRenovaveis" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Solar -->
                <div class="bg-slate-800/40 rounded-2xl border border-slate-700 overflow-hidden hover:border-emerald-500/40 transition flex flex-col">
                    <img src="https://images.unsplash.com/photo-1508514177221-188b1cf16e9d?auto=format&fit=crop&w=600&q=80" alt="Painéis Solares Fotovoltaicos" class="h-44 w-full object-cover border-b border-slate-700/60" onerror="this.src='https://placehold.co/600x400/1e293b/f59e0b?text=Energia+Solar'">
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-3 mb-3">
                                <i class="fa-solid fa-sun text-2xl text-amber-400"></i>
                                <h3 class="text-lg font-bold text-white">Energia Solar</h3>
                            </div>
                            <p class="text-slate-300 text-sm mb-4">Captada através de painéis fotovoltaicos que convertem a luz do sol diretamente em eletricidade limpa.</p>
                        </div>
                        <div class="space-y-1">
                            <p class="text-xs text-emerald-400 font-semibold"><i class="fa-solid fa-plus-circle"></i> Vantagem: Abundante, inesgotável e sem emissões diretas.</p>
                            <p class="text-xs text-rose-400 font-semibold"><i class="fa-solid fa-minus-circle"></i> Desvantagem: Intermitente (depende do sol) e custo inicial.</p>
                        </div>
                    </div>
                </div>

                <!-- Eólica -->
                <div class="bg-slate-800/40 rounded-2xl border border-slate-700 overflow-hidden hover:border-sky-500/40 transition flex flex-col">
                    <img src="https://images.unsplash.com/photo-1466611653911-95081537e5b7?auto=format&fit=crop&w=600&q=80" alt="Parque Eólico Turbinas" class="h-44 w-full object-cover border-b border-slate-700/60" onerror="this.src='https://placehold.co/600x400/1e293b/38bdf8?text=Energia+Eolica'">
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-3 mb-3">
                                <i class="fa-solid fa-wind text-2xl text-sky-400"></i>
                                <h3 class="text-lg font-bold text-white">Energia Eólica</h3>
                            </div>
                            <p class="text-slate-300 text-sm mb-4">Gerada a partir da força do vento, que movimenta as grandes pás das turbinas eólicas acionando geradores elétricos.</p>
                        </div>
                        <div class="space-y-1">
                            <p class="text-xs text-emerald-400 font-semibold"><i class="fa-solid fa-plus-circle"></i> Vantagem: Não emite gases do efeito estufa durante o uso.</p>
                            <p class="text-xs text-rose-400 font-semibold"><i class="fa-solid fa-minus-circle"></i> Desvantagem: Impacto sonoro, visual e rota de aves.</p>
                        </div>
                    </div>
                </div>

                <!-- Hidrelétrica -->
                <div class="bg-slate-800/40 rounded-2xl border border-slate-700 overflow-hidden hover:border-blue-500/40 transition flex flex-col">
                    <img src="./images/04.06-Hidreletricas.jpg" alt="Usina Hidrelétrica" class="h-44 w-full object-cover border-b border-slate-700/60" onerror="this.src='https://placehold.co/600x400/1e293b/38bdf8?text=Hidreletrica'">
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-3 mb-3">
                                <i class="fa-solid fa-water text-2xl text-blue-400"></i>
                                <h3 class="text-lg font-bold text-white">Hidrelétrica</h3>
                            </div>
                            <p class="text-slate-300 text-sm mb-4">Utiliza a força da água represada para girar turbinas. É a principal fonte geradora de eletricidade no Brasil.</p>
                        </div>
                        <div class="space-y-1">
                            <p class="text-xs text-emerald-400 font-semibold"><i class="fa-solid fa-plus-circle"></i> Vantagem: Alta capacidade de produção contínua.</p>
                            <p class="text-xs text-rose-400 font-semibold"><i class="fa-solid fa-minus-circle"></i> Desvantagem: Alagamento de grandes áreas e deslocamento populacional.</p>
                        </div>
                    </div>
                </div>

                <!-- Biomassa -->
                <div class="bg-slate-800/40 rounded-2xl border border-slate-700 overflow-hidden hover:border-emerald-500/40 transition flex flex-col">
                    <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?auto=format&fit=crop&w=600&q=80" alt="Biomassa e Plantio" class="h-44 w-full object-cover border-b border-slate-700/60" onerror="this.src='https://placehold.co/600x400/1e293b/38bdf8?text=Biomassa'">
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-3 mb-3">
                                <i class="fa-solid fa-seedling text-2xl text-emerald-400"></i>
                                <h3 class="text-lg font-bold text-white">Biomassa</h3>
                            </div>
                            <p class="text-slate-300 text-sm mb-4">Obtida através do reaproveitamento e queima de matéria orgânica, como bagaço de cana, madeira e resíduos agrícolas.</p>
                        </div>
                        <div class="space-y-1">
                            <p class="text-xs text-emerald-400 font-semibold"><i class="fa-solid fa-plus-circle"></i> Vantagem: Reaproveita resíduos e possui ciclo neutro de CO2.</p>
                            <p class="text-xs text-rose-400 font-semibold"><i class="fa-solid fa-minus-circle"></i> Desvantagem: Pode exigir amplas áreas de cultivo dedicado.</p>
                        </div>
                    </div>
                </div>

                <!-- Geotérmica -->
                <div class="bg-slate-800/40 rounded-2xl border border-slate-700 overflow-hidden hover:border-orange-500/40 transition flex flex-col">
                    <img src="./images/images.jpg" alt="Usina Geotérmica" class="h-44 w-full object-cover border-b border-slate-700/60" onerror="this.src=>
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-3 mb-3">
                                <i class="fa-solid fa-volcano text-2xl text-orange-400"></i>
                                <h3 class="text-lg font-bold text-white">Geotérmica</h3>
                            </div>
                            <p class="text-slate-300 text-sm mb-4">Aproveita o calor do interior da Terra para gerar vapor d'água e movimentar as turbinas das usinas.</p>
                        </div>
                        <div class="space-y-1">
                            <p class="text-xs text-emerald-400 font-semibold"><i class="fa-solid fa-plus-circle"></i> Vantagem: Produção constante e independente do clima.</p>
                            <p class="text-xs text-rose-400 font-semibold"><i class="fa-solid fa-minus-circle"></i> Desvantagem: Restrita a locais geologicamente específicos.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Conteúdo Aba 2: Não Renováveis (Escondida por padrão) -->
            <div id="tabNaoRenovaveis" class="hidden grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Petróleo -->
                <div class="bg-slate-800/40 rounded-2xl border border-slate-700 overflow-hidden hover:border-slate-500/40 transition flex flex-col">
                    <img src="https://images.unsplash.com/photo-1518623489648-a173ef7824f3?auto=format&fit=crop&w=600&q=80" alt="Plataforma de Petróleo" class="h-44 w-full object-cover border-b border-slate-700/60" onerror="this.src='https://placehold.co/600x400/1e293b/38bdf8?text=Petroleo'">
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-3 mb-3">
                                <i class="fa-solid fa-oil-well text-2xl text-slate-400"></i>
                                <h3 class="text-lg font-bold text-white">Petróleo</h3>
                            </div>
                            <p class="text-slate-300 text-sm mb-4">Combustível fóssil extraído do subsolo, refinado para produção de gasolina, diesel, plásticos e diversos derivados.</p>
                        </div>
                        <div class="space-y-1">
                            <p class="text-xs text-emerald-400 font-semibold"><i class="fa-solid fa-plus-circle"></i> Vantagem: Densidade energética elevada e fácil transporte.</p>
                            <p class="text-xs text-rose-400 font-semibold"><i class="fa-solid fa-minus-circle"></i> Desvantagem: Forte emissão de gases estufa e reservas finitas.</p>
                        </div>
                    </div>
                </div>

                <!-- Carvão Mineral -->
                <div class="bg-slate-800/40 rounded-2xl border border-slate-700 overflow-hidden hover:border-gray-500/40 transition flex flex-col">
                    <img src="https://images.unsplash.com/photo-1508739773434-c26b3d09e071?auto=format&fit=crop&w=600&q=80" alt="Usina a Carvão" class="h-44 w-full object-cover border-b border-slate-700/60" onerror="this.src='https://placehold.co/600x400/1e293b/38bdf8?text=Carvao+Mineral'">
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-3 mb-3">
                                <i class="fa-solid fa-smog text-2xl text-gray-400"></i>
                                <h3 class="text-lg font-bold text-white">Carvão Mineral</h3>
                            </div>
                            <p class="text-slate-300 text-sm mb-4">Combustível fóssil sólido queimado em usinas termelétricas para aquecer caldeiras e gerar vapor.</p>
                        </div>
                        <div class="space-y-1">
                            <p class="text-xs text-emerald-400 font-semibold"><i class="fa-solid fa-plus-circle"></i> Vantagem: Custo relativamente baixo e abundância em certos países.</p>
                            <p class="text-xs text-rose-400 font-semibold"><i class="fa-solid fa-minus-circle"></i> Desvantagem: É a fonte mais poluidora da matriz energética mundial.</p>
                        </div>
                    </div>
                </div>

                <!-- Gás Natural -->
                <div class="bg-slate-800/40 rounded-2xl border border-slate-700 overflow-hidden hover:border-amber-500/40 transition flex flex-col">
                    <img src="./images/gas.jpg" alt="Chama de Gás Natural" class="h-44 w-full object-cover border-b border-slate-700/60" onerror="this.src='https://placehold.co/600x400/1e293b/38bdf8?text=Gas+Natural'">
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-3 mb-3">
                                <i class="fa-solid fa-gas-pump text-2xl text-amber-500"></i>
                                <h3 class="text-lg font-bold text-white">Gás Natural</h3>
                            </div>
                            <p class="text-slate-300 text-sm mb-4">Mistura de hidrocarbonetos gasosos encontrada em reservatórios subterrâneos, utilizada em termelétricas e indústrias.</p>
                        </div>
                        <div class="space-y-1">
                            <p class="text-xs text-emerald-400 font-semibold"><i class="fa-solid fa-plus-circle"></i> Vantagem: Queima mais limpa comparada ao carvão e petróleo.</p>
                            <p class="text-xs text-rose-400 font-semibold"><i class="fa-solid fa-minus-circle"></i> Desvantagem: Fonte fóssil e risco de vazamento de metano.</p>
                        </div>
                    </div>
                </div>

                <!-- Nuclear -->
                <div class="bg-slate-800/40 rounded-2xl border border-slate-700 overflow-hidden hover:border-yellow-500/40 transition flex flex-col">
                    <img src="./images/energia-nuclear.webp" alt="Usina Nuclear" class="h-44 w-full object-cover border-b border-slate-700/60" onerror="this.src='https://placehold.co/600x400/1e293b/eab308?text=Energia+Nuclear'">
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-3 mb-3">
                                <i class="fa-solid fa-radiation text-2xl text-yellow-400"></i>
                                <h3 class="text-lg font-bold text-white">Energia Nuclear</h3>
                            </div>
                            <p class="text-slate-300 text-sm mb-4">Gerada a partir da fissão de átomos de urânio em reatores nucleares, liberando imensa quantidade de calor.</p>
                        </div>
                        <div class="space-y-1">
                            <p class="text-xs text-emerald-400 font-semibold"><i class="fa-solid fa-plus-circle"></i> Vantagem: Alta capacidade sem emissão de CO2 no processo.</p>
                            <p class="text-xs text-rose-400 font-semibold"><i class="fa-solid fa-minus-circle"></i> Desvantagem: Produção de lixo radioativo e alto custo de construção.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SEÇÃO: MATRIZ ENERGÉTICA (GRÁFICOS) -->
    <section id="matriz" class="py-16 bg-slate-900/60 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-white">Matriz Energética: Brasil</h2>
                <p class="text-slate-400 mt-2 max-w-2xl mx-auto">
                    A matriz energética representa a soma de todas as fontes de energia utilizadas por um país para suprir suas necessidades de transporte, indústria e eletricidade.
                </p>
            </div>

            <!-- Destaques Numéricos -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
                <div class="bg-slate-800/50 p-6 rounded-2xl border border-slate-700 text-center">
                    <p class="text-sm font-medium text-slate-400">Matriz Elétrica Brasileira</p>
                    <p class="text-4xl font-extrabold text-emerald-400 mt-2">85%</p>
                    <p class="text-xs text-slate-400 mt-1">Fontes Renováveis (Hidro, Solar, Eólica)</p>
                </div>
                <div class="bg-slate-800/50 p-6 rounded-2xl border border-slate-700 text-center">
                    <p class="text-sm font-medium text-slate-400">Matriz Elétrica Mundial</p>
                    <p class="text-4xl font-extrabold text-amber-400 mt-2">30%</p>
                    <p class="text-xs text-slate-400 mt-1">Fontes Renováveis</p>
                </div>
                <div class="bg-slate-800/50 p-6 rounded-2xl border border-slate-700 text-center">
                    <p class="text-sm font-medium text-slate-400">Matriz Energética Geral Brasil</p>
                    <p class="text-4xl font-extrabold text-sky-400 mt-2">48%</p>
                    <p class="text-xs text-slate-400 mt-1">Renovável (Mundo é aprox. 15%)</p>
                </div>
            </div>

            <!-- Gráficos Comparativos -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Gráfico Brasil -->
                <div class="bg-slate-800/40 p-6 rounded-2xl border border-slate-700 flex flex-col justify-between">
                    <h3 class="text-lg font-bold text-white mb-4 text-center flex items-center justify-center gap-2">
                        <span class="inline-block w-3 h-3 rounded-full bg-emerald-400"></span> Matriz Elétrica do Brasil
                    </h3>
                    <div class="relative h-64 w-full flex items-center justify-center">
                        <canvas id="chartBrasil"></canvas>
                    </div>
                    <p class="text-xs text-slate-400 text-center mt-4">
                        O Brasil destaca-se mundialmente por sua forte presença de usinas hidrelétricas, além do recente crescimento acelerado das energias eólica e solar.
                    </p>
                </div>

                <!-- Gráfico Mundo -->
                <div class="bg-slate-800/40 p-6 rounded-2xl border border-slate-700 flex flex-col justify-between">
                    <h3 class="text-lg font-bold text-white mb-4 text-center flex items-center justify-center gap-2">
                        <span class="inline-block w-3 h-3 rounded-full bg-amber-400"></span> Matriz Elétrica Mundial
                    </h3>
                    <div class="relative h-64 w-full flex items-center justify-center">
                        <canvas id="chartMundo"></canvas>
                    </div>
                    <p class="text-xs text-slate-400 text-center mt-4">
                        No cenário global, combustíveis fósseis como carvão e gás natural ainda predominam na geração de energia elétrica.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="py-8 bg-slate-950 border-t border-slate-800 text-center text-xs text-slate-500">
        <div class="max-w-7xl mx-auto px-4">
            <p>Trabalho de Física • Energias e Matriz Energética • Thainá Pontes</p>
        </div>
    </footer>

    <script>
        // Função para alternar abas de energias
        function switchTab(type) {
            const btnRenovaveis = document.getElementById('btnRenovaveis');
            const btnNaoRenovaveis = document.getElementById('btnNaoRenovaveis');
            const tabRenovaveis = document.getElementById('tabRenovaveis');
            const tabNaoRenovaveis = document.getElementById('tabNaoRenovaveis');

            if (type === 'renovaveis') {
                tabRenovaveis.classList.remove('hidden');
                tabNaoRenovaveis.classList.add('hidden');

                btnRenovaveis.className = 'px-6 py-2.5 rounded-xl font-semibold bg-emerald-500 text-slate-950 transition shadow-lg shadow-emerald-500/20 flex items-center gap-2';
                btnNaoRenovaveis.className = 'px-6 py-2.5 rounded-xl font-semibold bg-slate-800 text-slate-400 hover:text-white transition flex items-center gap-2';
            } else {
                tabRenovaveis.classList.add('hidden');
                tabNaoRenovaveis.classList.remove('hidden');

                btnNaoRenovaveis.className = 'px-6 py-2.5 rounded-xl font-semibold bg-emerald-500 text-slate-950 transition shadow-lg shadow-emerald-500/20 flex items-center gap-2';
                btnRenovaveis.className = 'px-6 py-2.5 rounded-xl font-semibold bg-slate-800 text-slate-400 hover:text-white transition flex items-center gap-2';
            }
        }

        // Função do menu mobile
        function toggleMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
        }

        // Renderização dos gráficos com Chart.js quando o DOM carregar
        document.addEventListener('DOMContentLoaded', function () {
            // Opções padrão
            Chart.defaults.color = '#94a3b8';
            Chart.defaults.font.family = 'Inter';

            // Gráfico Brasil
            const ctxBrasil = document.getElementById('chartBrasil').getContext('2d');
            new Chart(ctxBrasil, {
                type: 'doughnut',
                data: {
                    labels: ['Hidrelétrica', 'Eólica', 'Biomassa', 'Solar', 'Gás Natural / Fósseis', 'Nuclear'],
                    datasets: [{
                        data: [60, 13, 9, 7, 9, 2],
                        backgroundColor: [
                            '#3b82f6', // Hidro (Blue)
                            '#38bdf8', // Eólica (Sky)
                            '#10b981', // Biomassa (Emerald)
                            '#f59e0b', // Solar (Amber)
                            '#64748b', // Fósseis (Slate)
                            '#eab308'  // Nuclear (Yellow)
                        ],
                        borderWidth: 0
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                boxWidth: 12,
                                padding: 12,
                                font: { size: 11 }
                            }
                        }
                    }
                }
            });

            // Gráfico Mundo
            const ctxMundo = document.getElementById('chartMundo').getContext('2d');
            new Chart(ctxMundo, {
                type: 'doughnut',
                data: {
                    labels: ['Carvão Mineral', 'Gás Natural', 'Hidrelétrica', 'Nuclear', 'Eólica e Solar', 'Petróleo'],
                    datasets: [{
                        data: [35, 23, 15, 10, 13, 4],
                        backgroundColor: [
                            '#475569', // Carvão
                            '#f97316', // Gás
                            '#3b82f6', // Hidro
                            '#eab308', // Nuclear
                            '#10b981', // Eólica e Solar
                            '#334155'  // Petróleo
                        ],
                        borderWidth: 0
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                boxWidth: 12,
                                padding: 12,
                                font: { size: 11 }
                            }
                        }
                    }
                }
            });
        });
    </script>
</body>
</html>