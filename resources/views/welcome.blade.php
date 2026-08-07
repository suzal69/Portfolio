<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sujal Sthapit | Full-Stack Developer</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#12161c] text-slate-100 font-sans antialiased selection:bg-blue-600 selection:text-white">

    <!-- Header / Navbar -->
    <header class="fixed top-0 left-0 right-0 z-50 glass-panel border-b border-slate-800/60 shadow-glow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 sm:h-20 flex justify-between items-center">
            <a href="#" class="font-bold text-base sm:text-lg tracking-wide flex items-center gap-2 text-slate-100">
                <span class="text-blue-400">&lt;/&gt;</span> Sujal.dev
            </a>
            <nav class="hidden md:flex items-center gap-8 text-sm font-medium">
                <a href="#" class="text-slate-200 hover:text-white transition-colors">Home</a>
                <a href="#about" class="text-slate-300 hover:text-white transition-colors">About</a>
                <a href="#projects" class="text-slate-300 hover:text-white transition-colors">Portfolio</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="pt-24 sm:pt-28 lg:pt-36 pb-16 sm:pb-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-8 sm:gap-10 lg:gap-12 items-center">
        <!-- Left Text Area -->
        <div class="lg:col-span-7 space-y-6">
            <span class="text-sm font-semibold uppercase tracking-[0.36em] text-blue-400">Crafting polished web experiences</span>
            <h1 class="text-4xl sm:text-5xl lg:text-7xl font-extrabold tracking-tight leading-[1.05]">
                Building <span class="text-gradient">Modern Web Applications</span> & Scalable Backend Systems
            </h1>
            <p class="text-slate-400 text-base sm:text-lg max-w-xl leading-relaxed">
                I’m Sujal Sthapit, an 8th-semester BIM student and Full-Stack Developer. I specialize in building robust Laravel applications, designing relational MySQL databases, and integrating Python-driven backend logic.
            </p>
            <div class="pt-4 flex flex-col sm:flex-row sm:items-center sm:gap-4 gap-3">
                <a href="#projects" class="inline-flex items-center justify-center rounded-full bg-gradient-to-r from-sky-500 to-indigo-500 px-5 py-3 text-white text-sm font-semibold shadow-glow hover:scale-105 active:scale-95 hover:from-sky-400 hover:to-indigo-400 transition-all duration-300">
                    Explore Portfolio
                </a>
                <a href="#projects" class="inline-flex items-center text-sm font-semibold text-slate-300 hover:text-white hover:translate-x-1 transition-all duration-300">
                    View case studies, tools, and projects <span class="ml-1 text-sky-400">→</span>
                </a>
            </div>
        </div>

        <!-- Right Profile Image / Graphic Card -->
        <div class="lg:col-span-5 relative flex justify-center">
            <div class="w-full max-w-md glass-panel border border-slate-800/40 rounded-[2.5rem] p-6 sm:p-8 shadow-2xl relative overflow-hidden text-center transition-all duration-500 hover:shadow-[0_25px_60px_-15px_rgba(56,189,248,0.25)] hover:border-slate-700/60 hover:scale-[1.01]">
                <div class="absolute -right-10 -bottom-10 w-40 h-40 bg-blue-500/15 rounded-full blur-3xl"></div>
                <div class="absolute -left-14 top-10 w-36 h-36 bg-violet-500/10 rounded-full blur-3xl"></div>

                <div class="w-40 h-40 sm:w-48 sm:h-48 mx-auto mb-6 rounded-[2rem] overflow-hidden border border-slate-700/70 bg-slate-900 shadow-[0_0_0_1px_rgba(255,255,255,0.04),0_20px_60px_rgba(2,6,23,0.45)] transition-transform duration-500 hover:scale-105">
                    <img src="{{ asset('images/profile.jpg') }}" alt="Sujal Sthapit" class="w-full h-full object-cover">
                </div>

                <h3 class="text-2xl font-bold text-white mb-1">Sujal Sthapit</h3>
                <p class="text-xs uppercase tracking-wider text-sky-400 font-semibold mb-2">Full-Stack Developer | Laravel, PHP & MySQL</p>
                <p class="text-sm text-slate-400 mb-4 leading-relaxed">Focused on clean architecture, API integration, and performance optimization.</p>
                <a href="#about" class="inline-flex items-center gap-2 text-sm font-semibold text-white/80 hover:text-white transition-colors duration-300">
                    View Background <span class="text-blue-400">→</span>
                </a>
            </div>
        </div>
    </section>

    <!-- About Stats Section -->
    <section id="about" class="py-16 sm:py-20 lg:py-24 border-t border-slate-800/60 bg-[#0f1724]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-12 gap-8 sm:gap-10 lg:gap-12 items-center">
            <div class="lg:col-span-6 space-y-4">
                <span class="text-sm font-semibold uppercase tracking-[0.32em] text-sky-400">/ About Me</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-white">Engineered for reliability, performance, and clean maintainability.</h2>
                <p class="text-slate-400 text-base leading-relaxed max-w-2xl">
                    With a background in Information Management (BIM), I bridge the gap between business logic and technical execution. From developing authenticated CRUD applications with Eloquent ORM to deploying live e-commerce solutions with custom analytics tracking, I focus on writing clean, maintainable code that delivers real-world value.
                </p>
                <div class="pt-4">
                    <a href="#projects" class="inline-flex items-center gap-2 text-sm font-semibold text-white hover:text-sky-300 transition-all duration-300 hover:translate-x-1">
                        Browse Projects <span>→</span>
                    </a>
                </div>
            </div>

            <div class="lg:col-span-6 grid grid-cols-1 sm:grid-cols-2 gap-6 sm:gap-8 rounded-3xl border border-slate-800/70 bg-white/5 p-6 sm:p-8 shadow-glow lg:pl-12">
                <div>
                    <span class="text-5xl font-black text-slate-100">8th</span>
                    <span class="block text-xs uppercase tracking-wider text-slate-500 mt-1">Semester BIM Student</span>
                </div>
                <div>
                    <span class="text-5xl font-black text-slate-100">3+</span>
                    <span class="block text-xs uppercase tracking-wider text-slate-500 mt-1">Completed Projects</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Grid Section -->
    <main id="projects" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-24 lg:py-32">
        <div class="flex flex-col gap-4 md:flex-row md:justify-between md:items-end mb-14 sm:mb-16">
            <div>
                <span class="text-sm font-semibold uppercase tracking-[0.32em] text-sky-400 mb-2 block">/ Portfolio</span>
                <h3 class="text-3xl sm:text-4xl md:text-5xl font-extrabold tracking-tight text-white">
                    Featured Work
                </h3>
                <div class="mt-3 h-1 w-20 rounded-full bg-gradient-to-r from-sky-400 to-indigo-500"></div>
            </div>
            <p class="max-w-xl text-slate-400 text-sm leading-relaxed md:text-right">
                A curated selection of projects with bold visuals, crisp micro-interactions, and premium presentation.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 sm:gap-10">
            @forelse($items as $item)
                <div class="group relative flex h-full flex-col overflow-hidden rounded-[2rem] border border-slate-800/40 bg-slate-950/80 p-6 shadow-[0_20px_80px_-40px_rgba(14,165,233,0.3)] transition-all duration-500 hover:-translate-y-2.5 hover:scale-[1.02] hover:border-sky-400/40 hover:bg-slate-900/98 hover:shadow-[0_25px_60px_-15px_rgba(14,165,233,0.45)]">
                    <div class="absolute -right-8 -top-10 h-36 w-36 rounded-full bg-sky-500/10 blur-3xl"></div>
                    <div class="absolute -left-8 bottom-8 h-32 w-32 rounded-full bg-indigo-500/10 blur-3xl"></div>

                    <div class="relative z-10 flex h-full flex-col justify-between">
                        <div>
                            <div class="mb-4 inline-flex items-center gap-2 rounded-full bg-slate-900/80 px-3 py-1.5 text-[10px] uppercase tracking-[0.32em] text-sky-300 shadow-inner shadow-slate-950/50">
                                <span>Featured</span>
                            </div>

                            <h4 class="text-xl sm:text-2xl font-black text-white tracking-tight leading-tight mb-5 group-hover:text-sky-400 transition-colors duration-300">{{ $item->title }}</h4>

                            @if($item->image_path)
                                <div class="overflow-hidden rounded-[1.3rem] border border-slate-800/50 bg-slate-950 shadow-inner mb-5">
                                    <img src="{{ asset('storage/' . $item->image_path) }}" alt="{{ $item->title }}" class="h-48 w-full object-cover transition-transform duration-700 ease-out group-hover:scale-105" />
                                </div>
                            @else
                                <div class="flex h-48 items-center justify-center rounded-[1.3rem] border border-dashed border-slate-800/50 bg-slate-900/50 text-sm text-slate-500 mb-5">
                                    Preview coming soon
                                </div>
                            @endif

                            <div class="flex flex-wrap gap-2 mb-5">
                                @foreach(array_slice(explode(',', $item->tech_stack), 0, 5) as $tech)
                                    <span class="rounded-full border border-slate-800 bg-slate-900/90 px-2.5 py-1 text-[10px] font-semibold uppercase tracking-[0.22em] text-slate-300">
                                        {{ trim($tech) }}
                                    </span>
                                @endforeach
                            </div>

                            <div x-data="{ expanded: false }" class="text-sm leading-relaxed text-slate-400 group-hover:text-slate-300 transition-colors duration-300">
                                <p>
                                    <span x-show="!expanded">
                                        {{ Str::limit($item->description, 120, '...') }}
                                    </span>

                                    <span x-show="expanded" x-cloak>
                                        {{ $item->description }}
                                    </span>
                                </p>

                                @if(strlen($item->description) > 120)
                                    <button 
                                        @click="expanded = !expanded" 
                                        class="mt-1 inline-block text-xs font-semibold text-sky-400 hover:text-sky-300 transition-colors focus:outline-none"
                                    >
                                        <span x-show="!expanded">Read More ↓</span>
                                        <span x-show="expanded" x-cloak>Show Less ↑</span>
                                    </button>
                                @endif
                            </div>
                        </div>

                        <div class="mt-6 flex flex-wrap items-center gap-3 border-t border-slate-800/60 pt-4 text-sm font-medium text-slate-300">
                            @if($item->live_url)
                                <a href="{{ $item->live_url }}" target="_blank" class="inline-flex items-center gap-2 rounded-full bg-sky-500/10 px-4 py-2 text-sky-300 transition-all duration-300 hover:scale-105 hover:bg-sky-500/20 hover:text-white">
                                    Live Demo <span class="text-lg">→</span>
                                </a>
                            @endif
                            @if($item->github_url)
                                <a href="{{ $item->github_url }}" target="_blank" class="inline-flex items-center gap-2 rounded-full bg-slate-900/80 px-4 py-2 text-slate-300 transition-all duration-300 hover:scale-105 hover:bg-slate-800 hover:text-white">
                                    GitHub
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-24 bg-[#161b27]/80 border border-slate-800/60 rounded-[2rem]">
                    <p class="text-slate-500">No projects added yet. Publish entries from the admin area when you are ready.</p>
                </div>
            @endforelse
        </div>
    </main>

    <!-- Footer -->
    <footer class="border-t border-slate-800/60 py-10 sm:py-12 px-4 sm:px-6 lg:px-8 text-center text-sm text-slate-400 bg-[#0f1724]">
        <p>© {{ date('Y') }} Sujal Sthapit. Crafted with Laravel & Tailwind CSS.</p>
    </footer>

</body>
</html>