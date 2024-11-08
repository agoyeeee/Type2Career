@extends('layouts.landing-layout')

@section('content')
<!-- Personality Section -->
<section class="flex flex-col items-center max-w-5xl w-full py-10">
    <div class="text-center mb-10">
        <h2 class="text-5xl font-bold mb-4">INFJ</h2>
        <p class="text-gray-400 text-lg leading-relaxed max-w-2xl mx-auto">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
    </div>

    <!-- Traits Box -->
    <div class="bg-gray-900 rounded-lg shadow-lg p-10 w-full max-w-2xl mb-10">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="flex flex-col items-center text-center bg-gray-800 p-5 rounded-lg">
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/c1872bc628bb9e266ecf3dc17ff20a23860862ba76d10cbcaeac2c820db4a870?placeholderIfAbsent=true&apiKey=d95a0cee8ce84bfc9d5346e2cc150f38"
                    alt="Extraversion vs Introversion" class="w-16 mb-4" />
                <h3 class="text-xl font-semibold mb-2">Extraversion (E) vs. Introversion (I)</h3>
                <p class="text-gray-400 text-sm leading-relaxed">
                    Where you focus your attention and get your energy.
                </p>
            </div>
            <div class="flex flex-col items-center text-center bg-gray-800 p-5 rounded-lg">
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/59ed0700c630abf648e66271db2a1fb33a348e7148cf5abfcd5e54de8bca390b?placeholderIfAbsent=true&apiKey=d95a0cee8ce84bfc9d5346e2cc150f38"
                    alt="Sensing vs Intuition" class="w-16 mb-4" />
                <h3 class="text-xl font-semibold mb-2">Sensing (S) vs. Intuition (N)</h3>
                <p class="text-gray-400 text-sm leading-relaxed">How you take in information.</p>
            </div>
            <div class="flex flex-col items-center text-center bg-gray-800 p-5 rounded-lg">
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/6225816af9e62f1e8498643ec891e42d6d6b492ed1177421378ec2e11eff4d67?placeholderIfAbsent=true&apiKey=d95a0cee8ce84bfc9d5346e2cc150f38"
                    alt="Thinking vs Feeling" class="w-16 mb-4" />
                <h3 class="text-xl font-semibold mb-2">Thinking (T) vs. Feeling (F)</h3>
                <p class="text-gray-400 text-sm leading-relaxed">How you make decisions.</p>
            </div>
            <div class="flex flex-col items-center text-center bg-gray-800 p-5 rounded-lg">
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/6225816af9e62f1e8498643ec891e42d6d6b492ed1177421378ec2e11eff4d67?placeholderIfAbsent=true&apiKey=d95a0cee8ce84bfc9d5346e2cc150f38"
                    alt="Judging vs Perceiving" class="w-16 mb-4" />
                <h3 class="text-xl font-semibold mb-2">Judging (J) vs. Perceiving (P)</h3>
                <p class="text-gray-400 text-sm leading-relaxed">
                    How you deal with the outside world.
                </p>
            </div>
        </div>
    </div>

    <!-- Job Recommendations -->
    <section class="text-center w-full">
        <h2 class="text-4xl font-bold mb-6">Job Recommendations</h2>
        <div class="flex flex-wrap gap-6 justify-center">
            <div class="bg-gray-900 rounded-lg shadow-lg p-5 text-center w-60">
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/c3c1d55c275f915c105869ce7e0861c23222878a5f80dcbaf47aee18bed3033d?placeholderIfAbsent=true&apiKey=d95a0cee8ce84bfc9d5346e2cc150f38"
                    alt="Job 1" class="w-20 h-20 rounded-full mx-auto mb-4" />
                <h4 class="text-lg font-semibold">Job 1</h4>
                <p class="text-gray-400 text-sm leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
            </div>
            <div class="bg-gray-900 rounded-lg shadow-lg p-5 text-center w-60">
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/22891d8dd4d9d071f30e4cb7123fe0af001dd07e3dbfb2ec5fb25f96b1417b04?placeholderIfAbsent=true&apiKey=d95a0cee8ce84bfc9d5346e2cc150f38"
                    alt="Job 2" class="w-20 h-20 rounded-full mx-auto mb-4" />
                <h4 class="text-lg font-semibold">Job 2</h4>
                <p class="text-gray-400 text-sm leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
            </div>
            <div class="bg-gray-900 rounded-lg shadow-lg p-5 text-center w-60">
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/a43463c1711c30a65a234678672ae3f4050a44bd773a2c72136bcc0027014323?placeholderIfAbsent=true&apiKey=d95a0cee8ce84bfc9d5346e2cc150f38"
                    alt="Job 3" class="w-20 h-20 rounded-full mx-auto mb-4" />
                <h4 class="text-lg font-semibold">Job 3</h4>
                <p class="text-gray-400 text-sm leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
            </div>
        </div>
    </section>
</section>
@endsection