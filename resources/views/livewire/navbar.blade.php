<nav class="bg-white border-b-2 border-gray-100 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <!-- Logo -->
            <a href="/" class="flex items-center gap-2 group">
                <div class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center transition-transform duration-200 group-hover:scale-110">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                </div>
                <span class="text-xl font-bold text-foreground tracking-tight">TangCare</span>
            </a>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center gap-8">
                <a href="/" class="text-foreground font-medium hover:text-primary transition-colors duration-200">Home</a>
                <a href="#features" class="text-gray-600 font-medium hover:text-primary transition-colors duration-200">Features</a>
                <a href="#how-it-works" class="text-gray-600 font-medium hover:text-primary transition-colors duration-200">How It Works</a>
                <a href="#stats" class="text-gray-600 font-medium hover:text-primary transition-colors duration-200">Impact</a>
            </div>

            <!-- Desktop Auth Links -->
            <div class="hidden md:flex items-center gap-4">
                @auth
                    <a href="/dashboard" class="btn-secondary !py-2 !px-4">Dashboard</a>
                @else
                    <a href="/login" class="text-foreground font-medium hover:text-primary transition-colors duration-200">Login</a>
                    <a href="/register" class="btn-primary !py-2 !px-6">Register</a>
                @endauth
            </div>

            <!-- Mobile Menu Button -->
            <button 
                wire:click="toggleMobileMenu" 
                class="md:hidden p-2 rounded-md text-foreground hover:bg-muted transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-primary"
                aria-label="Toggle menu"
            >
                @if($mobileMenuOpen)
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                @else
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                @endif
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    @if($mobileMenuOpen)
        <div class="md:hidden bg-white border-t-2 border-gray-100">
            <div class="px-4 py-4 space-y-3">
                <a href="/" class="block text-foreground font-medium py-2 hover:text-primary transition-colors">Home</a>
                <a href="#features" class="block text-gray-600 font-medium py-2 hover:text-primary transition-colors">Features</a>
                <a href="#how-it-works" class="block text-gray-600 font-medium py-2 hover:text-primary transition-colors">How It Works</a>
                <a href="#stats" class="block text-gray-600 font-medium py-2 hover:text-primary transition-colors">Impact</a>
                
                <div class="pt-4 border-t-2 border-gray-100 space-y-3">
                    @auth
                        <a href="/dashboard" class="block btn-secondary text-center">Dashboard</a>
                    @else
                        <a href="/login" class="block text-foreground font-medium py-2 text-center hover:text-primary transition-colors">Login</a>
                        <a href="/register" class="block btn-primary text-center">Register</a>
                    @endauth
                </div>
            </div>
        </div>
    @endif
</nav>
