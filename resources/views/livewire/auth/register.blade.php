<div>
    <h2 class="text-2xl font-bold text-foreground text-center mb-2">Create Account</h2>
    <p class="text-gray-600 text-center mb-8">Join TangCare and start making an impact</p>

    <form wire:submit="register" class="space-y-5">
        <!-- Name -->
        <div>
            <label for="name" class="block text-sm font-semibold text-foreground mb-2">Full Name</label>
            <input 
                wire:model="name" 
                type="text" 
                id="name" 
                class="w-full px-4 py-3 bg-muted rounded-md text-foreground placeholder-gray-500 border-2 border-transparent focus:border-primary focus:bg-white focus:outline-none transition-all duration-200"
                placeholder="John Doe"
            >
            @error('name')
                <p class="mt-2 text-sm text-red-600 font-medium">{{ $message }}</p>
            @enderror
        </div>

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

        <!-- Confirm Password -->
        <div>
            <label for="password_confirmation" class="block text-sm font-semibold text-foreground mb-2">Confirm Password</label>
            <input 
                wire:model="password_confirmation" 
                type="password" 
                id="password_confirmation" 
                class="w-full px-4 py-3 bg-muted rounded-md text-foreground placeholder-gray-500 border-2 border-transparent focus:border-primary focus:bg-white focus:outline-none transition-all duration-200"
                placeholder="••••••••"
            >
            @error('password_confirmation')
                <p class="mt-2 text-sm text-red-600 font-medium">{{ $message }}</p>
            @enderror
        </div>

        <!-- Terms Notice -->
        <p class="text-sm text-gray-500 text-center">
            By registering, you agree to donate responsibly and help the Tangerang community.
        </p>

        <!-- Submit Button -->
        <button 
            type="submit" 
            class="w-full btn-primary"
            wire:loading.attr="disabled"
            wire:loading.class="opacity-75 cursor-wait"
        >
            <span wire:loading.remove>Create Account</span>
            <span wire:loading class="flex items-center justify-center gap-2">
                <svg class="animate-spin h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                Creating account...
            </span>
        </button>
    </form>

    <!-- Login Link -->
    <p class="mt-8 text-center text-gray-600">
        Already have an account?
        <a href="{{ route('login') }}" class="font-semibold text-primary hover:text-blue-700 transition-colors" wire:navigate>
            Sign in
        </a>
    </p>
</div>
