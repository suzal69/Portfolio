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
        <div class="max-w-7xl mx-auto px-8 h-20 flex justify-between items-center">
            <a href="#" class="font-bold text-lg tracking-wide flex items-center gap-2 text-slate-100">
                <span class="text-blue-400">&lt;/&gt;</span> Sujal.dev
            </a>
            <nav class="hidden md:flex items-center gap-8 text-sm text-slate-300 font-medium">
                <a href="#" class="text-slate-100 hover:text-white transition">Home</a>
                <a href="#about" class="hover:text-white transition">About</a>
                <a href="#projects" class="hover:text-white transition">Portfolio</a>
            </nav>
            <div class="flex items-center gap-4">
                {{-- Admin dashboard link hidden from public home page --}}
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="pt-36 pb-20 px-8 max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        <!-- Left Text Area -->
        <div class="lg:col-span-7 space-y-6">
            <span class="text-sm font-semibold uppercase tracking-[0.36em] text-blue-400">Crafting polished web experiences</span>
            <h1 class="text-5xl lg:text-7xl font-extrabold tracking-tight leading-[1.05]">
                I'm Sujal, a <br><span class="text-gradient">Full-Stack Web Developer</span>
            </h1>
            <p class="text-slate-400 text-lg max-w-xl leading-relaxed">
                Final-year BIM student with strong foundations in HTML, CSS, JavaScript, PHP, Python, and MySQL. I build clean web applications, manage database workflows, and solve problems using modern development tools.
            </p>
            <div class="pt-4 flex flex-col sm:flex-row sm:items-center sm:gap-6 gap-4">
                <a href="#projects" class="inline-flex items-center justify-center rounded-full bg-gradient-to-r from-sky-500 to-indigo-500 px-5 py-3 text-white text-sm font-semibold shadow-glow hover:from-sky-400 hover:to-indigo-400 transition">
                    Explore Portfolio
                </a>
                <a href="#projects" class="text-sm font-semibold text-slate-300 hover:text-white transition">View case studies, tools, and projects →</a>
            </div>
        </div>

        <!-- Right Profile Image / Graphic Card -->
        <div class="lg:col-span-5 relative flex justify-center">
            <div class="w-full max-w-md glass-panel border border-slate-800/70 rounded-[2.5rem] p-6 shadow-2xl relative overflow-hidden text-center">
                <div class="absolute -right-10 -bottom-10 w-40 h-40 bg-blue-500/15 rounded-full blur-3xl"></div>
                <div class="absolute -left-14 top-10 w-36 h-36 bg-violet-500/10 rounded-full blur-3xl"></div>

                <div class="w-48 h-48 mx-auto mb-6 rounded-[2rem] overflow-hidden border border-slate-700/70 bg-slate-900 shadow-inner">
                    <img src="{{ asset('images/profile.jpg') }}" alt="Sujal Sthapit" class="w-full h-full object-cover">
                </div>

                <h3 class="text-2xl font-bold text-white mb-1">Sujal Sthapit</h3>
                <p class="text-sm text-slate-300 mb-4">Full-Stack Architect, UI-focused problem solver, and database builder.</p>
                <a href="#about" class="inline-flex items-center gap-2 text-sm font-semibold text-white/80 hover:text-white transition">
                    View Background <span class="text-blue-400">→</span>
                </a>
            </div>
        </div>
    </section>

    <!-- About Stats Section -->
    <section id="about" class="py-24 border-t border-slate-800/60 bg-[#0f1724]">
        <div class="max-w-7xl mx-auto px-8 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-6 space-y-4">
                <span class="text-sm font-semibold uppercase tracking-[0.32em] text-sky-400">/ About Me</span>
                <h2 class="text-4xl font-extrabold tracking-tight text-white">I build systems, interfaces, and clean backend workflows.</h2>
                <p class="text-slate-400 text-base leading-relaxed max-w-2xl">
                    As a final-year BIM student, I deliver web projects with strong backend logic, scalable database design, and polished frontend experiences. I also apply AI tools and data analytics techniques to speed development and improve quality.
                </p>
                <div class="pt-4">
                    <a href="#projects" class="inline-flex items-center gap-2 text-sm font-semibold text-white hover:text-sky-300 transition">
                        Browse Projects <span>→</span>
                    </a>
                </div>
            </div>

            <div class="lg:col-span-6 grid grid-cols-2 gap-8 rounded-3xl border border-slate-800/70 bg-white/5 p-8 shadow-glow lg:pl-12">
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
    <main id="projects" class="max-w-7xl mx-auto px-8 py-28">
        <div class="flex flex-col gap-4 md:flex-row md:justify-between md:items-end mb-16">
            <div>
                <span class="text-sm font-semibold uppercase tracking-[0.32em] text-sky-400 mb-2 block">/ Portfolio</span>
                <h3 class="text-4xl md:text-5xl font-extrabold tracking-tight text-white">Featured Work</h3>
            </div>
            <p class="max-w-xl text-slate-400 text-sm leading-relaxed md:text-right">
                A curated selection of projects that highlight responsive design, modern UI polish, and practical full-stack architecture.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($items as $item)
                <div class="glass-panel border border-slate-700/80 rounded-[2rem] p-6 transition duration-500 hover:-translate-y-1 hover:shadow-2xl hover:shadow-sky-500/20 overflow-hidden">
                    <div class="space-y-6">
                        @if($item->image_path)
                            <div class="relative overflow-hidden rounded-[1.5rem] h-56 border border-slate-800/70 shadow-inner">
                                <img src="{{ asset('storage/' . $item->image_path) }}" alt="{{ $item->title }}" class="w-full h-full object-cover transition duration-700 group-hover:scale-105">
                                <div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-slate-950/90 via-slate-950/30 to-transparent p-4">
                                    <p class="text-xs uppercase tracking-[0.3em] text-sky-300">{{ $item->tech_stack }}</p>
                                </div>
                            </div>
                        @endif

                        <div class="space-y-4">
                            <div class="flex items-center gap-2 flex-wrap">
                                @foreach(explode(',', $item->tech_stack) as $tech)
                                    <span class="px-3 py-1 text-[11px] font-semibold uppercase tracking-[0.2em] text-sky-300 bg-slate-900/70 border border-slate-700 rounded-full">
                                        {{ trim($tech) }}
                                    </span>
                                @endforeach
                            </div>

                            <h4 class="text-2xl font-bold text-white transition group-hover:text-sky-300">{{ $item->title }}</h4>
                            <p class="text-slate-300 text-sm leading-relaxed">{{ $item->description }}</p>
                        </div>
                    </div>

                    <div class="mt-8 flex flex-wrap gap-4 items-center border-t border-slate-800/70 pt-4 text-sm font-medium">
                        @if($item->live_url)
                            <a href="{{ $item->live_url }}" target="_blank" class="inline-flex items-center gap-2 text-sky-300 hover:text-white transition">
                                Live Demo <span class="text-xl">→</span>
                            </a>
                        @endif
                        @if($item->github_url)
                            <a href="{{ $item->github_url }}" target="_blank" class="inline-flex items-center gap-2 text-slate-300 hover:text-white transition">
                                GitHub
                            </a>
                        @endif
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-24 bg-[#161b27]/80 border border-slate-800/60 rounded-[2rem]">
                    <p class="text-slate-500">No projects added yet. Log in via your dashboard to publish entries!</p>
                </div>
            @endforelse
        </div>
    </main>

    <!-- Footer -->
    <footer class="border-t border-slate-800/60 py-12 text-center text-sm text-slate-400 bg-[#0f1724]">
        <p>© {{ date('Y') }} Sujal Sthapit. Crafted with Laravel & Tailwind CSS.</p>
    </footer>

</body>
</html>