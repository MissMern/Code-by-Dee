<?php require_once('navbar.php'); ?>

<div class="p-6 sm:p-10 md:p-16 lg:p-24">

<div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
  <form class="space-y-8 bg-white p-8 rounded-lg shadow-md" enctype="multipart/form-data" method="POST" action="submit_poem.php">
    <div>
      <h2 class="text-2xl font-semibold text-gray-800">Submit a Poem</h2>
      <p class="mt-1 text-sm text-gray-500">Your words and visuals combined. Share your poetry and its vibe.</p>
    </div>

    <!-- Title -->
    <div>
      <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
      <input type="text" name="title" id="title" required class="mt-1 block w-full rounded-md border border-gray-300 px-4 py-2 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Whispers of the Wind">
    </div>

    <!-- Author -->
    <div>
      <label for="author" class="block text-sm font-medium text-gray-700">Author</label>
      <input type="text" name="author" id="author" required class="mt-1 block w-full rounded-md border border-gray-300 px-4 py-2 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Your name or alias">
    </div>

    <!-- Poem -->
    <div>
      <label for="poem" class="block text-sm font-medium text-gray-700">Poem</label>
      <textarea name="poem" id="poem" rows="8" required class="mt-1 block w-full rounded-md border border-gray-300 px-4 py-2 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Write your beautiful lines here..."></textarea>
    </div>

    <!-- Image Upload -->
    <div>
      <label for="image" class="block text-sm font-medium text-gray-700">Upload an Image (optional)</label>
      <input type="file" name="image" id="image" accept="image/*" class="mt-1 block w-full text-sm text-gray-600 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
      <p class="mt-1 text-xs text-gray-500">JPG, PNG, or GIF up to ~2MB</p>
    </div>

    <!-- Submit Button -->
    <div class="flex justify-end">
      <button type="submit" class="inline-flex items-center px-6 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
        Submit Poem
      </button>
    </div>
  </form>
</div>
 
</div>
<script src="https://cdn.tailwindcss.com"></script>
<?php require'footer.php'; ?>