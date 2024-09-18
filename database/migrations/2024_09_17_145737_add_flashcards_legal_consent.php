<?php

use Illuminate\Database\Migrations\Migration;

use Maize\LegalConsent\Models\LegalDocument;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Insert new legal document (Privacy Policy)
        LegalDocument::create([
            'type' => 'privacy-policy',
            'notes' => 'Privacy Policy',
            'body' => '<div class="prose lg:prose-xl dark:prose-dark">
        <p>
            Welcome to <span class="font-semibold text-indigo-500 dark:text-indigo-300">YourFlashCards</span>! We value your privacy and strive to protect your personal data. When you use our platform, we collect some personal information, such as your name and email address, which is essential for managing your account and allowing you to fully utilize our features.
        </p>

        <h2 class="text-2xl font-semibold text-indigo-500 dark:text-indigo-300 mt-6">1. Data Collection</h2>
        <p>
            We collect minimal data necessary for your account registration and flashcard usage. This data includes, but is not limited to, your name, email address, and any flashcards you create or interact with.
        </p>

        <h2 class="text-2xl font-semibold text-indigo-500 dark:text-indigo-300 mt-6">2. Data Usage</h2>
        <p>
            Your data is only used to provide and improve your experience on our platform. We do not sell or share your data with third-party services unless required by law.
        </p>

        <h2 class="text-2xl font-semibold text-indigo-500 dark:text-indigo-300 mt-6">3. Security</h2>
        <p>
            We implement industry-standard measures to protect your personal data from unauthorized access, disclosure, or alteration.
        </p>

        <h2 class="text-2xl font-semibold text-indigo-500 dark:text-indigo-300 mt-6">4. Your Rights</h2>
        <p>
            You have the right to access, modify, or delete your personal information at any time. If you wish to delete your account or withdraw consent, simply contact our support team or do so via your profile settings.
        </p>

        <h2 class="text-2xl font-semibold text-indigo-500 dark:text-indigo-300 mt-6">5. Updates</h2>
        <p>
            This Privacy Policy may be updated from time to time to reflect changes in our practices. We will notify you of any significant changes via email or through notifications on our platform.
        </p>

        <p class="mt-6 text-gray-600 dark:text-gray-400">
            For more details or any questions, feel free to reach out to us at <a href="mailto:support@yourflashcards.net" class="text-indigo-500 dark:text-indigo-300 underline">support@yourflashcards.net</a>.
        </p>
    </div>',
            'published_at' => now(),
        ]);
    }
    //TODO probably a bad practice?

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        LegalDocument::where('key', 'privacy-policy')->delete();
    }
};
