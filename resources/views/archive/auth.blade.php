<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign In Popup</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen flex items-center justify-center p-4">

  <!-- Trigger Button START -->
  <button 
    id="openModalBtn"
    class="px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 active:scale-95 transition-colors shadow-lg">
    Sign In
  </button>
  <!-- Trigger Button END -->

  <!-- Modal Overlay START -->
  <div 
    id="modalOverlay" 
    class="fixed inset-0 bg-black/50 backdrop-blur-sm hidden items-center justify-center z-50 p-4">
    
    <!-- Modal Container START -->
    <div class="bg-white rounded-2xl shadow-2xl w-full max-w-md relative animate-fade-in">
      
      <!-- Close Button START -->
      <button 
        id="closeModalBtn"
        class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 transition-colors z-10">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
        </svg>
      </button>
      <!-- Close Button END -->

      <!-- Role Selection Screen START -->
      <div id="roleSelection" class="px-8 py-8">
        
        <!-- Role Selection Header START -->
        <div class="text-center mb-8">
          <h2 class="text-2xl font-bold text-gray-900">Masuk Sebagai</h2>
          <p class="text-sm text-gray-500 mt-2">Pilih jenis akun Anda</p>
        </div>
        <!-- Role Selection Header END -->

        <!-- Role Options START -->
        <div class="space-y-4">
          
          <!-- Pencari Kos Option START -->
          <button 
            id="pencariKosBtn"
            class="w-full px-6 py-4 border-2 border-gray-200 rounded-xl hover:border-blue-500 hover:bg-blue-50 transition-colors flex items-center gap-4 group">
            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center group-hover:bg-blue-500 transition-colors">
              <svg class="w-6 h-6 text-blue-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
              </svg>
            </div>
            <div class="text-left flex-1">
              <h3 class="font-semibold text-gray-900">Pencari Kos</h3>
              <p class="text-sm text-gray-500">Saya ingin mencari tempat kos</p>
            </div>
            <svg class="w-5 h-5 text-gray-400 group-hover:text-blue-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
          </button>
          <!-- Pencari Kos Option END -->

          <!-- Pemilik Kos Option START -->
          <button 
            id="pemilikKosBtn"
            class="w-full px-6 py-4 border-2 border-gray-200 rounded-xl hover:border-green-500 hover:bg-green-50 transition-colors flex items-center gap-4 group">
            <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center group-hover:bg-green-500 transition-colors">
              <svg class="w-6 h-6 text-green-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
              </svg>
            </div>
            <div class="text-left flex-1">
              <h3 class="font-semibold text-gray-900">Pemilik Kos</h3>
              <p class="text-sm text-gray-500">Saya ingin mengelola kos</p>
            </div>
            <svg class="w-5 h-5 text-gray-400 group-hover:text-green-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
          </button>
          <!-- Pemilik Kos Option END -->

        </div>
        <!-- Role Options END -->

      </div>
      <!-- Role Selection Screen END -->

      <!-- Sign In Form Screen START -->
      <div id="signInScreen" class="hidden">

        <!-- Modal Header START -->
        <div class="px-8 pt-8 pb-6 border-b border-gray-100">
          <!-- Back Button START -->
          <button 
            id="backBtn"
            class="text-gray-400 hover:text-gray-600 transition-colors mb-4 flex items-center gap-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
            <span class="text-sm font-medium">Kembali</span>
          </button>
          <!-- Back Button END -->
          <h2 class="text-2xl font-bold text-gray-900">Sign In</h2>
          <p id="roleSubtitle" class="text-sm text-gray-500 mt-1">Masuk sebagai Pencari Kos</p>
        </div>
        <!-- Modal Header END -->

        <!-- Modal Body START -->
        <div class="px-8 py-6">
          
          <!-- Sign In Form START -->
          <form id="signInForm" class="space-y-4">
            
            <!-- Email/Phone Input START -->
            <div>
              <label for="emailPhone" class="block text-sm font-medium text-gray-700 mb-2">
                Email / No HP
              </label>
              <input 
                type="text" 
                id="emailPhone"
                placeholder="Masukkan email atau nomor HP"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors"
                required>
            </div>
            <!-- Email/Phone Input END -->

            <!-- Password Input START -->
            <div>
              <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                Password
              </label>
              <input 
                type="password" 
                id="password"
                placeholder="Masukkan password"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors"
                required>
            </div>
            <!-- Password Input END -->

            <!-- Forgot Password Link START -->
            <div class="text-right">
              <a href="#" id="forgotPasswordBtn" class="text-sm text-blue-600 hover:text-blue-700 font-medium">
                Lupa Password?
              </a>
            </div>
            <!-- Forgot Password Link END -->

            <!-- Sign In Button START -->
            <button 
              type="submit"
              class="w-full px-4 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 active:scale-98 transition-colors shadow-md">
              Sign In
            </button>
            <!-- Sign In Button END -->

          </form>
          <!-- Sign In Form END -->

          <!-- Divider START -->
          <div class="relative my-6">
            <div class="absolute inset-0 flex items-center">
              <div class="w-full border-t border-gray-200"></div>
            </div>
            <div class="relative flex justify-center text-sm">
              <span class="px-4 bg-white text-gray-500">atau</span>
            </div>
          </div>
          <!-- Divider END -->

          <!-- Sign In with Google Button START -->
          <button 
            type="button"
            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg font-medium text-gray-700 hover:bg-gray-50 active:scale-98 transition-colors flex items-center justify-center gap-3">
            <svg class="w-5 h-5" viewBox="0 0 24 24">
              <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
              <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
              <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
              <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
            </svg>
            Sign in with Google
          </button>
          <!-- Sign In with Google Button END -->

        </div>
        <!-- Modal Body END -->

        <!-- Modal Footer START -->
        <div class="px-8 py-6 bg-gray-50 rounded-b-2xl border-t border-gray-100">
          <p class="text-sm text-center text-gray-600">
            Belum punya akun? 
            <a href="#" id="daftarSekarangBtn" class="text-blue-600 hover:text-blue-700 font-semibold">
              Daftar Sekarang
            </a>
          </p>
        </div>
        <!-- Modal Footer END -->

      </div>
      <!-- Sign In Form Screen END -->

      <!-- Registration Form Screen START -->
      <div id="registerScreen" class="hidden">

        <!-- Modal Header START -->
        <div class="px-8 pt-8 pb-6 border-b border-gray-100">
          <!-- Back Button START -->
          <button 
            id="backToSignInBtn"
            class="text-gray-400 hover:text-gray-600 transition-colors mb-4 flex items-center gap-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
            <span class="text-sm font-medium">Kembali</span>
          </button>
          <!-- Back Button END -->
          <h2 class="text-2xl font-bold text-gray-900">Daftar Akun</h2>
          <p id="registerRoleSubtitle" class="text-sm text-gray-500 mt-1">Daftar sebagai Pencari Kos</p>
        </div>
        <!-- Modal Header END -->

        <!-- Modal Body START -->
        <div class="px-8 py-6">
          
          <!-- Registration Form START -->
          <form id="registerForm" class="space-y-4">
            
            <!-- Email Input START -->
            <div>
              <label for="registerEmail" class="block text-sm font-medium text-gray-700 mb-2">
                Email
              </label>
              <input 
                type="email" 
                id="registerEmail"
                placeholder="Masukkan email Anda"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors"
                required>
            </div>
            <!-- Email Input END -->

            <!-- Phone Input START -->
            <div>
              <label for="registerPhone" class="block text-sm font-medium text-gray-700 mb-2">
                Nomor HP
              </label>
              <input 
                type="tel" 
                id="registerPhone"
                placeholder="Masukkan nomor HP"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors"
                required>
            </div>
            <!-- Phone Input END -->

            <!-- Password Input START -->
            <div>
              <label for="registerPassword" class="block text-sm font-medium text-gray-700 mb-2">
                Password
              </label>
              <input 
                type="password" 
                id="registerPassword"
                placeholder="Buat password"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors"
                required>
            </div>
            <!-- Password Input END -->

            <!-- Confirm Password Input START -->
            <div>
              <label for="confirmPassword" class="block text-sm font-medium text-gray-700 mb-2">
                Konfirmasi Password
              </label>
              <input 
                type="password" 
                id="confirmPassword"
                placeholder="Konfirmasi password"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors"
                required>
            </div>
            <!-- Confirm Password Input END -->

            <!-- Register Button START -->
            <button 
              type="submit"
              class="w-full px-4 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 active:scale-98 transition-colors shadow-md mt-6">
              Daftar
            </button>
            <!-- Register Button END -->

          </form>
          <!-- Registration Form END -->

        </div>
        <!-- Modal Body END -->

        <!-- Modal Footer START -->
        <div class="px-8 py-6 bg-gray-50 rounded-b-2xl border-t border-gray-100">
          <p class="text-sm text-center text-gray-600">
            Sudah punya akun? 
            <a href="#" id="backToSignInLink" class="text-blue-600 hover:text-blue-700 font-semibold">
              Sign In
            </a>
          </p>
        </div>
        <!-- Modal Footer END -->

      </div>
      <!-- Registration Form Screen END -->

      <!-- OTP Verification Screen START -->
      <div id="otpScreen" class="hidden">

        <!-- Modal Header START -->
        <div class="px-8 pt-8 pb-6 border-b border-gray-100">
          <h2 class="text-2xl font-bold text-gray-900">Verifikasi OTP</h2>
          <p class="text-sm text-gray-500 mt-1">Kode verifikasi telah dikirim ke email Anda</p>
          <p id="otpEmail" class="text-sm font-semibold text-gray-700 mt-1"></p>
        </div>
        <!-- Modal Header END -->

        <!-- Modal Body START -->
        <div class="px-8 py-6">
          
          <!-- OTP Form START -->
          <form id="otpForm" class="space-y-6">
            
            <!-- OTP Input Boxes START -->
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-4 text-center">
                Masukkan Kode OTP (6 Digit)
              </label>
              <div class="flex gap-3 justify-center">
                <input 
                  type="text" 
                  maxlength="1"
                  class="otp-input w-12 h-14 text-center text-xl font-semibold border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors"
                  required>
                <input 
                  type="text" 
                  maxlength="1"
                  class="otp-input w-12 h-14 text-center text-xl font-semibold border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors"
                  required>
                <input 
                  type="text" 
                  maxlength="1"
                  class="otp-input w-12 h-14 text-center text-xl font-semibold border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors"
                  required>
                <input 
                  type="text" 
                  maxlength="1"
                  class="otp-input w-12 h-14 text-center text-xl font-semibold border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors"
                  required>
                <input 
                  type="text" 
                  maxlength="1"
                  class="otp-input w-12 h-14 text-center text-xl font-semibold border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors"
                  required>
                <input 
                  type="text" 
                  maxlength="1"
                  class="otp-input w-12 h-14 text-center text-xl font-semibold border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors"
                  required>
              </div>
            </div>
            <!-- OTP Input Boxes END -->

            <!-- Resend OTP Link START -->
            <div class="text-center">
              <p class="text-sm text-gray-600">
                Tidak menerima kode? 
                <a href="#" id="resendOtpBtn" class="text-blue-600 hover:text-blue-700 font-semibold">
                  Kirim Ulang
                </a>
              </p>
              <p id="otpTimer" class="text-xs text-gray-500 mt-2"></p>
            </div>
            <!-- Resend OTP Link END -->

            <!-- Verify Button START -->
            <button 
              type="submit"
              class="w-full px-4 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 active:scale-98 transition-colors shadow-md">
              Verifikasi
            </button>
            <!-- Verify Button END -->

          </form>
          <!-- OTP Form END -->

        </div>
        <!-- Modal Body END -->

      </div>
      <!-- OTP Verification Screen END -->

      <!-- Forgot Password Email Screen START -->
      <div id="forgotPasswordScreen" class="hidden">

        <!-- Modal Header START -->
        <div class="px-8 pt-8 pb-6 border-b border-gray-100">
          <!-- Back Button START -->
          <button 
            id="backToSignInFromForgot"
            class="text-gray-400 hover:text-gray-600 transition-colors mb-4 flex items-center gap-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
            <span class="text-sm font-medium">Kembali</span>
          </button>
          <!-- Back Button END -->
          <h2 class="text-2xl font-bold text-gray-900">Lupa Password</h2>
          <p class="text-sm text-gray-500 mt-1">Masukkan email Anda untuk reset password</p>
        </div>
        <!-- Modal Header END -->

        <!-- Modal Body START -->
        <div class="px-8 py-6">
          
          <!-- Forgot Password Form START -->
          <form id="forgotPasswordForm" class="space-y-4">
            
            <!-- Email Input START -->
            <div>
              <label for="forgotEmail" class="block text-sm font-medium text-gray-700 mb-2">
                Email
              </label>
              <input 
                type="email" 
                id="forgotEmail"
                placeholder="Masukkan email Anda"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors"
                required>
            </div>
            <!-- Email Input END -->

            <!-- Submit Button START -->
            <button 
              type="submit"
              class="w-full px-4 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 active:scale-98 transition-colors shadow-md mt-6">
              Kirim Kode OTP
            </button>
            <!-- Submit Button END -->

          </form>
          <!-- Forgot Password Form END -->

        </div>
        <!-- Modal Body END -->

      </div>
      <!-- Forgot Password Email Screen END -->

      <!-- OTP Forgot Password Screen START -->
      <div id="otpForgotScreen" class="hidden">

        <!-- Modal Header START -->
        <div class="px-8 pt-8 pb-6 border-b border-gray-100">
          <h2 class="text-2xl font-bold text-gray-900">Verifikasi OTP</h2>
          <p class="text-sm text-gray-500 mt-1">Kode verifikasi telah dikirim ke email Anda</p>
          <p id="otpForgotEmail" class="text-sm font-semibold text-gray-700 mt-1"></p>
        </div>
        <!-- Modal Header END -->

        <!-- Modal Body START -->
        <div class="px-8 py-6">
          
          <!-- OTP Form START -->
          <form id="otpForgotForm" class="space-y-6">
            
            <!-- OTP Input Boxes START -->
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-4 text-center">
                Masukkan Kode OTP (6 Digit)
              </label>
              <div class="flex gap-3 justify-center">
                <input 
                  type="text" 
                  maxlength="1"
                  class="otp-forgot-input w-12 h-14 text-center text-xl font-semibold border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors"
                  required>
                <input 
                  type="text" 
                  maxlength="1"
                  class="otp-forgot-input w-12 h-14 text-center text-xl font-semibold border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors"
                  required>
                <input 
                  type="text" 
                  maxlength="1"
                  class="otp-forgot-input w-12 h-14 text-center text-xl font-semibold border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors"
                  required>
                <input 
                  type="text" 
                  maxlength="1"
                  class="otp-forgot-input w-12 h-14 text-center text-xl font-semibold border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors"
                  required>
                <input 
                  type="text" 
                  maxlength="1"
                  class="otp-forgot-input w-12 h-14 text-center text-xl font-semibold border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors"
                  required>
                <input 
                  type="text" 
                  maxlength="1"
                  class="otp-forgot-input w-12 h-14 text-center text-xl font-semibold border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors"
                  required>
              </div>
            </div>
            <!-- OTP Input Boxes END -->

            <!-- Resend OTP Link START -->
            <div class="text-center">
              <p class="text-sm text-gray-600">
                Tidak menerima kode? 
                <a href="#" id="resendOtpForgotBtn" class="text-blue-600 hover:text-blue-700 font-semibold">
                  Kirim Ulang
                </a>
              </p>
              <p id="otpForgotTimer" class="text-xs text-gray-500 mt-2"></p>
            </div>
            <!-- Resend OTP Link END -->

            <!-- Verify Button START -->
            <button 
              type="submit"
              class="w-full px-4 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 active:scale-98 transition-colors shadow-md">
              Verifikasi
            </button>
            <!-- Verify Button END -->

          </form>
          <!-- OTP Form END -->

        </div>
        <!-- Modal Body END -->

      </div>
      <!-- OTP Forgot Password Screen END -->

      <!-- Reset Password Screen START -->
      <div id="resetPasswordScreen" class="hidden">

        <!-- Modal Header START -->
        <div class="px-8 pt-8 pb-6 border-b border-gray-100">
          <h2 class="text-2xl font-bold text-gray-900">Reset Password</h2>
          <p class="text-sm text-gray-500 mt-1">Buat password baru untuk akun Anda</p>
        </div>
        <!-- Modal Header END -->

        <!-- Modal Body START -->
        <div class="px-8 py-6">
          
          <!-- Reset Password Form START -->
          <form id="resetPasswordForm" class="space-y-4">
            
            <!-- New Password Input START -->
            <div>
              <label for="newPassword" class="block text-sm font-medium text-gray-700 mb-2">
                Password Baru
              </label>
              <input 
                type="password" 
                id="newPassword"
                placeholder="Masukkan password baru"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors"
                required>
            </div>
            <!-- New Password Input END -->

            <!-- Confirm New Password Input START -->
            <div>
              <label for="confirmNewPassword" class="block text-sm font-medium text-gray-700 mb-2">
                Konfirmasi Password Baru
              </label>
              <input 
                type="password" 
                id="confirmNewPassword"
                placeholder="Konfirmasi password baru"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors"
                required>
            </div>
            <!-- Confirm New Password Input END -->

            <!-- Submit Button START -->
            <button 
              type="submit"
              class="w-full px-4 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 active:scale-98 transition-colors shadow-md mt-6">
              Reset Password
            </button>
            <!-- Submit Button END -->

          </form>
          <!-- Reset Password Form END -->

        </div>
        <!-- Modal Body END -->

      </div>
      <!-- Reset Password Screen END -->

    </div>
    <!-- Modal Container END -->

  </div>
  <!-- Modal Overlay END -->

  <script>
    // Get elements
    const openModalBtn = document.getElementById('openModalBtn');
    const closeModalBtn = document.getElementById('closeModalBtn');
    const modalOverlay = document.getElementById('modalOverlay');
    const signInForm = document.getElementById('signInForm');
    
    const roleSelection = document.getElementById('roleSelection');
    const signInScreen = document.getElementById('signInScreen');
    const pencariKosBtn = document.getElementById('pencariKosBtn');
    const pemilikKosBtn = document.getElementById('pemilikKosBtn');
    const backBtn = document.getElementById('backBtn');
    const roleSubtitle = document.getElementById('roleSubtitle');

    const registerScreen = document.getElementById('registerScreen');
    const otpScreen = document.getElementById('otpScreen');
    const daftarSekarangBtn = document.getElementById('daftarSekarangBtn');
    const backToSignInBtn = document.getElementById('backToSignInBtn');
    const backToSignInLink = document.getElementById('backToSignInLink');
    const registerForm = document.getElementById('registerForm');
    const otpForm = document.getElementById('otpForm');
    const registerRoleSubtitle = document.getElementById('registerRoleSubtitle');
    const otpEmail = document.getElementById('otpEmail');
    const resendOtpBtn = document.getElementById('resendOtpBtn');
    const otpTimer = document.getElementById('otpTimer');
    const otpInputs = document.querySelectorAll('.otp-input');

    const forgotPasswordBtn = document.getElementById('forgotPasswordBtn');
    const forgotPasswordScreen = document.getElementById('forgotPasswordScreen');
    const forgotPasswordForm = document.getElementById('forgotPasswordForm');
    const backToSignInFromForgot = document.getElementById('backToSignInFromForgot');
    const otpForgotScreen = document.getElementById('otpForgotScreen');
    const otpForgotForm = document.getElementById('otpForgotForm');
    const otpForgotEmail = document.getElementById('otpForgotEmail');
    const otpForgotInputs = document.querySelectorAll('.otp-forgot-input');
    const resendOtpForgotBtn = document.getElementById('resendOtpForgotBtn');
    const otpForgotTimer = document.getElementById('otpForgotTimer');
    const resetPasswordScreen = document.getElementById('resetPasswordScreen');
    const resetPasswordForm = document.getElementById('resetPasswordForm');

    let selectedRole = '';
    let userEmail = '';
    let forgotEmail = '';
    let resendCountdown = 60;
    let resendForgotCountdown = 60;
    let countdownInterval;
    let forgotCountdownInterval;

    // Open modal - show role selection
    openModalBtn.addEventListener('click', () => {
      modalOverlay.classList.remove('hidden');
      modalOverlay.classList.add('flex');
      showScreen('roleSelection');
    });

    pencariKosBtn.addEventListener('click', () => {
      selectedRole = 'Pencari Kos';
      roleSubtitle.textContent = 'Masuk sebagai Pencari Kos';
      registerRoleSubtitle.textContent = 'Daftar sebagai Pencari Kos';
      showScreen('signInScreen');
    });

    pemilikKosBtn.addEventListener('click', () => {
      selectedRole = 'Pemilik Kos';
      roleSubtitle.textContent = 'Masuk sebagai Pemilik Kos';
      registerRoleSubtitle.textContent = 'Daftar sebagai Pemilik Kos';
      showScreen('signInScreen');
    });

    backBtn.addEventListener('click', () => {
      showScreen('roleSelection');
    });

    daftarSekarangBtn.addEventListener('click', (e) => {
      e.preventDefault();
      showScreen('registerScreen');
    });

    backToSignInBtn.addEventListener('click', () => {
      showScreen('signInScreen');
    });

    backToSignInLink.addEventListener('click', (e) => {
      e.preventDefault();
      showScreen('signInScreen');
    });

    registerForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const email = document.getElementById('registerEmail').value;
      const phone = document.getElementById('registerPhone').value;
      const password = document.getElementById('registerPassword').value;
      const confirmPassword = document.getElementById('confirmPassword').value;

      if (password !== confirmPassword) {
        alert('Password dan konfirmasi password tidak cocok!');
        return;
      }

      userEmail = email;
      otpEmail.textContent = email;
      
      console.log('Registration:', { email, phone, password, role: selectedRole });
      
      // Show OTP screen
      showScreen('otpScreen');
      startOtpTimer();
    });

    otpInputs.forEach((input, index) => {
      input.addEventListener('input', (e) => {
        if (e.target.value.length === 1 && index < otpInputs.length - 1) {
          otpInputs[index + 1].focus();
        }
      });

      input.addEventListener('keydown', (e) => {
        if (e.key === 'Backspace' && e.target.value === '' && index > 0) {
          otpInputs[index - 1].focus();
        }
      });
    });

    otpForm.addEventListener('submit', (e) => {
      e.preventDefault();
      let otpCode = '';
      otpInputs.forEach(input => {
        otpCode += input.value;
      });

      if (otpCode.length !== 6) {
        alert('Mohon masukkan kode OTP lengkap (6 digit)');
        return;
      }

      console.log('OTP Verification:', { email: userEmail, otp: otpCode, role: selectedRole });
      
      clearInterval(countdownInterval);
      alert(`Akun berhasil didaftarkan sebagai ${selectedRole}!\nOTP: ${otpCode}`);
      
      modalOverlay.classList.add('hidden');
      modalOverlay.classList.remove('flex');
      
      // Reset form
      registerForm.reset();
      otpInputs.forEach(input => input.value = '');
    });

    resendOtpBtn.addEventListener('click', (e) => {
      e.preventDefault();
      if (resendCountdown === 60) {
        console.log('Resending OTP to:', userEmail);
        alert('Kode OTP baru telah dikirim ke email Anda');
        startOtpTimer();
      }
    });

    forgotPasswordBtn.addEventListener('click', (e) => {
      e.preventDefault();
      showScreen('forgotPasswordScreen');
    });

    backToSignInFromForgot.addEventListener('click', () => {
      showScreen('signInScreen');
    });

    forgotPasswordForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const email = document.getElementById('forgotEmail').value;
      forgotEmail = email;
      otpForgotEmail.textContent = email;
      
      console.log('[v0] Forgot password OTP sent to:', email);
      
      showScreen('otpForgotScreen');
      startOtpForgotTimer();
    });

    otpForgotInputs.forEach((input, index) => {
      input.addEventListener('input', (e) => {
        if (e.target.value.length === 1 && index < otpForgotInputs.length - 1) {
          otpForgotInputs[index + 1].focus();
        }
      });

      input.addEventListener('keydown', (e) => {
        if (e.key === 'Backspace' && e.target.value === '' && index > 0) {
          otpForgotInputs[index - 1].focus();
        }
      });
    });

    otpForgotForm.addEventListener('submit', (e) => {
      e.preventDefault();
      let otpCode = '';
      otpForgotInputs.forEach(input => {
        otpCode += input.value;
      });

      if (otpCode.length !== 6) {
        alert('Mohon masukkan kode OTP lengkap (6 digit)');
        return;
      }

      console.log('[v0] OTP verified for forgot password:', { email: forgotEmail, otp: otpCode });
      
      clearInterval(forgotCountdownInterval);
      
      showScreen('resetPasswordScreen');
      otpForgotInputs.forEach(input => input.value = '');
    });

    resendOtpForgotBtn.addEventListener('click', (e) => {
      e.preventDefault();
      if (resendForgotCountdown === 60) {
        console.log('[v0] Resending forgot password OTP to:', forgotEmail);
        alert('Kode OTP baru telah dikirim ke email Anda');
        startOtpForgotTimer();
      }
    });

    resetPasswordForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const newPassword = document.getElementById('newPassword').value;
      const confirmNewPassword = document.getElementById('confirmNewPassword').value;

      if (newPassword !== confirmNewPassword) {
        alert('Password dan konfirmasi password tidak cocok!');
        return;
      }

      console.log('[v0] Password reset successful for:', forgotEmail);
      
      alert('Password berhasil direset! Silakan login dengan password baru.');
      
      resetPasswordForm.reset();
      forgotPasswordForm.reset();
      
      showScreen('signInScreen');
    });

    function startOtpTimer() {
      resendCountdown = 60;
      resendOtpBtn.style.pointerEvents = 'none';
      resendOtpBtn.classList.add('opacity-50');
      
      countdownInterval = setInterval(() => {
        resendCountdown--;
        otpTimer.textContent = `Kirim ulang dalam ${resendCountdown} detik`;
        
        if (resendCountdown <= 0) {
          clearInterval(countdownInterval);
          resendCountdown = 60;
          otpTimer.textContent = '';
          resendOtpBtn.style.pointerEvents = 'auto';
          resendOtpBtn.classList.remove('opacity-50');
        }
      }, 1000);
    }

    function startOtpForgotTimer() {
      resendForgotCountdown = 60;
      resendOtpForgotBtn.style.pointerEvents = 'none';
      resendOtpForgotBtn.classList.add('opacity-50');
      
      forgotCountdownInterval = setInterval(() => {
        resendForgotCountdown--;
        otpForgotTimer.textContent = `Kirim ulang dalam ${resendForgotCountdown} detik`;
        
        if (resendForgotCountdown <= 0) {
          clearInterval(forgotCountdownInterval);
          resendForgotCountdown = 60;
          otpForgotTimer.textContent = '';
          resendOtpForgotBtn.style.pointerEvents = 'auto';
          resendOtpForgotBtn.classList.remove('opacity-50');
        }
      }, 1000);
    }

    function showScreen(screenName) {
      roleSelection.classList.add('hidden');
      signInScreen.classList.add('hidden');
      registerScreen.classList.add('hidden');
      otpScreen.classList.add('hidden');
      forgotPasswordScreen.classList.add('hidden');
      otpForgotScreen.classList.add('hidden');
      resetPasswordScreen.classList.add('hidden');
      
      if (screenName === 'roleSelection') {
        roleSelection.classList.remove('hidden');
      } else if (screenName === 'signInScreen') {
        signInScreen.classList.remove('hidden');
      } else if (screenName === 'registerScreen') {
        registerScreen.classList.remove('hidden');
      } else if (screenName === 'otpScreen') {
        otpScreen.classList.remove('hidden');
      } else if (screenName === 'forgotPasswordScreen') {
        forgotPasswordScreen.classList.remove('hidden');
      } else if (screenName === 'otpForgotScreen') {
        otpForgotScreen.classList.remove('hidden');
      } else if (screenName === 'resetPasswordScreen') {
        resetPasswordScreen.classList.remove('hidden');
      }
    }

    // Close modal
    closeModalBtn.addEventListener('click', () => {
      modalOverlay.classList.add('hidden');
      modalOverlay.classList.remove('flex');
      clearInterval(countdownInterval);
      clearInterval(forgotCountdownInterval);
    });

    // Close modal when clicking outside
    modalOverlay.addEventListener('click', (e) => {
      if (e.target === modalOverlay) {
        modalOverlay.classList.add('hidden');
        modalOverlay.classList.remove('flex');
        clearInterval(countdownInterval);
        clearInterval(forgotCountdownInterval);
      }
    });

    // Handle form submission
    signInForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const emailPhone = document.getElementById('emailPhone').value;
      const password = document.getElementById('password').value;
      console.log('Sign In:', { emailPhone, password, role: selectedRole });
      alert(`Sign In berhasil sebagai ${selectedRole}!`);
      modalOverlay.classList.add('hidden');
      modalOverlay.classList.remove('flex');
    });

    // Close modal with Escape key
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && !modalOverlay.classList.contains('hidden')) {
        modalOverlay.classList.add('hidden');
        modalOverlay.classList.remove('flex');
        clearInterval(countdownInterval);
        clearInterval(forgotCountdownInterval);
      }
    });
  </script>

  <style>
    @keyframes fade-in {
      from {
        opacity: 0;
        transform: scale(0.95);
      }
      to {
        opacity: 1;
        transform: scale(1);
      }
    }

    .animate-fade-in {
      animation: fade-in 0.2s ease-out;
    }
  </style>

</body>
</html>
