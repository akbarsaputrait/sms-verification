<div class="bg-{{ session()->has('verified') ? 'teal': 'red'}}-100 border-t-4 border-{{ session()->has('validated') ? 'teal': 'red'}}-500 rounded-b text-{{ session()->has('validated') ? 'teal': 'red'}}-900 px-4 py-3 shadow-md mb-4"
    role="alert">
    <div>
        <p class="font-bold">{{ $title }}</p>
        <p class="text-sm">{{ $content }}</p>
    </div>
</div>
