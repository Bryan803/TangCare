<div>
    <h2 class="text-2xl font-bold text-foreground text-center mb-2">Welcome Back</h2>
    <p class="text-gray-600 text-center mb-8">Sign in to your TangCare account</p>

    <form wire:submit="login" class="space-y-6">
        <!-- Email -->
        <div>
            <label for="email" class="block text-sm font-semibold text-foreground mb-2">Email Address</label>
            <input 
                wire:model="email" 
                type="email" 
                id="email" 
                class="w-full px-4 py-3 bg-muted rounded-md text-foreground placeholder-gray-500 border-2 border-transparent focus:border-primary focus:bg-white focus:outline-none transition-all duration-200"
                placeholder="you@example.com"
            >
            @error('email')
                <p class="mt-2 text-sm text-red-600 font-medium">{{ $message }}</p>
            @enderror
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block text-sm font-semibold text-foreground mb-2">Password</label>
            <input 
                wire:model="password" 
                type="password" 
                id="password" 
                class="w-full px-4 py-3 bg-muted rounded-md text-foreground placeholder-gray-500 border-2 border-transparent focus:border-primary focus:bg-white focus:outline-none transition-all duration-200"
                placeholder="••••••••"
            >
            @error('password')
                <p class="mt-2 text-sm text-red-600 font-medium">{{ $message }}</p>
            @enderror
        </div>

        <!-- Remember Me -->
        <div class="flex items-center justify-between">
            <label class="flex items-center gap-2 cursor-pointer">
                <input 
                    wire:model="remember" 
                    type="checkbox" 
                    class="w-5 h-5 rounded border-2 border-gray-300 text-primary focus:ring-2 focus:ring-primary focus:ring-offset-2"
                >
                <span class="text-sm text-gray-600">Remember me</span>
            </label>
        </div>

        <!-- Submit Button -->
        <button 
            type="submit" 
            class="w-full btn-primary"
            wire:loading.attr="disabled"
            wire:loading.class="opacity-75 cursor-wait"
        >
            <span wire:loading.remove>Sign In</span>
            <span wire:loading class="flex items-center justify-center gap-2">
                <svg class="animate-spin h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                Signing in...
            </span>
        </button>
    </form>

    <!-- Register Link -->
    <p class="mt-8 text-center text-gray-600">
        Don't have an account?
        <a href="{{ route('register') }}" class="font-semibold text-primary hover:text-blue-700 transition-colors" wire:navigate>
            Create one
        </a>
    </p>
</div>
