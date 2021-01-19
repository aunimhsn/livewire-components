<div class="max-w-lg p-8 mx-2 my-12 bg-white rounded-sm shadow-sm md:mx-auto">
    <section class="pt-2 pb-4">
        <h1 class="text-xl font-extrabold uppercase font-montserrat">Créer un compte</h1>
        <p class="text-sm text-gray-400 font-montserrat">
            La créativité, c'est l'intelligence qui s'amuse.
        </p>
        
    </section>

    <section class="mt-6">
        <form class="flex flex-col" method="POST" action="#">
            @csrf

            <!-- Username -->
            <div class="pt-3 mb-6 bg-gray-100 rounded-sm">
                <label class="block mx-3 mb-2 text-xs font-bold text-gray-700 uppercase font-montserrat" for="username">
                    Nom d'utilisateur
                </label>
                <input type="text" 
                       id="username" 
                       name="username" 
                       value="{{ old('username') }}" 
                       autofocus
                       required
                       wire:model="username"
                       class="w-full px-3 pb-3 text-sm text-gray-700 transition duration-300 bg-gray-100 border-b-2 border-gray-200 rounded-sm font-montserrat focus:outline-none focus:border-blue-600 hover:border-blue-300"
                />
            </div>

            <!-- Email -->
            <div class="pt-3 mb-6 bg-gray-100 rounded-sm">
                <label class="block mx-3 mb-2 text-xs font-bold text-gray-700 uppercase font-montserrat" for="email">
                    Adresse email
                </label>
                <input type="email" 
                       id="email" 
                       name="email" 
                       value="{{ old('email') }}" 
                       required
                       wire:model="email"
                       class="w-full px-3 pb-3 text-sm text-gray-700 transition duration-300 bg-gray-100 border-b-2 border-gray-200 rounded-sm font-montserrat focus:outline-none focus:border-blue-600 hover:border-blue-300"
                />
            </div>

            <!-- Password -->
            <div class="pt-3 mb-6 bg-gray-100 rounded-sm">
                <label class="block mx-3 mb-2 text-xs font-bold text-gray-700 uppercase font-montserrat" for="password">
                    Mot de passe
                </label>
                <input type="password" 
                       id="password" 
                       name="password" 
                       value="{{ old('password') }}" 
                       required
                       wire:model="password"
                       class="w-full px-3 pb-3 text-sm text-gray-700 transition duration-300 bg-gray-100 border-b-2 border-gray-200 rounded-sm font-montserrat focus:outline-none focus:border-blue-600 hover:border-blue-300"
                />
            </div>

            <!-- Password Confirmation -->
            <div class="pt-3 mb-6 bg-gray-100 rounded-sm">
                <label class="block mx-3 mb-2 text-xs font-bold text-gray-700 uppercase font-montserrat" for="password_confirmation">
                    Confirmation du mot de passe
                </label>
                <input type="password" 
                       id="password_confirmation" 
                       name="password_confirmation"
                       value="{{ old('password_confirmation') }}" 
                       required
                       wire:model="password_confirmation"
                       class="w-full px-3 pb-3 text-sm text-gray-700 transition duration-300 bg-gray-100 border-b-2 border-gray-200 rounded-sm font-montserrat focus:outline-none focus:border-blue-600 hover:border-blue-300"
                />
            </div>

            <div class="flex justify-between">
                <!-- Remember Me -->
                <div x-data="{ checked: false }" class="mb-6">
                    <label for="remember_me">
                        <input type="checkbox" 
                               id="remember_me" 
                               name="remember" 
                               class="hidden"
                               x-bind:checked="checked" 
                        />
                        <div class="flex cursor-pointer" @click="checked = ! checked">
                            <div :class="checked ? 'bg-blue-600' : 'bg-gray-200'" class="w-4 h-4 mr-3 rounded-sm"></div>
                            <span class="text-xs font-bold text-gray-600 transition duration-200 font-montserrat hover:text-gray-900">
                                Rester connecté
                            </span>
                        </div>
                    </label>
                </div>

                <!-- Forgot your password -->
                <a href="#"
                   class="text-xs font-bold text-gray-600 transition duration-200 cursor-pointer font-montserrat hover:text-gray-900">
                   Déjà un compte ?
                </a>
            </div>

            <button class="p-6 mb-4 text-sm font-bold text-white uppercase transition duration-300 bg-blue-600 rounded-sm shadow-sm focus:outline-none font-montserrat hover:bg-blue-900 hover:shadow-md"
                    type="submit">
                Terminer l'inscription
            </button>
        </form>
    </section>
</div>
