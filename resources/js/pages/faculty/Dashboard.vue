<script setup>
import { Head } from '@inertiajs/vue3';

defineProps({
  message: String
});
</script>

<template>
    <Head title="Teacher Dashboard" />

    <div class="min-h-screen bg-gray-50">
        <!-- Simple Header -->
        <header class="bg-white shadow">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-xl font-bold tracking-tight text-gray-900">Teacher Dashboard</h1>
            </div>
        </header>
        
        <!-- Main Content -->
        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                <div class="flex h-full flex-1 flex-col gap-4 rounded-xl p-4">
                    <!-- Welcome banner -->
                    <div class="relative overflow-hidden rounded-xl border border-gray-200 bg-white p-6 shadow-sm">
                        <h1 class="text-2xl font-semibold">{{ message }}</h1>
                        <p class="mt-2">Welcome to your Teacher Dashboard!</p>
                    </div>

                    <!-- Grid cards similar to admin dashboard -->
                    <div class="grid auto-rows-min gap-4 md:grid-cols-3">
                        <!-- Enrollment Status Card -->
                        <div class="relative overflow-hidden rounded-xl border border-gray-200 bg-white shadow-sm">
                            <div class="p-4">
                                <h3 class="text-lg font-medium text-blue-800">Enrollment Status</h3>
                                <div class="mt-2 text-sm">
                                    <p>Status: <strong>Pending</strong></p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Requirements Card -->
                        <div class="relative overflow-hidden rounded-xl border border-gray-200 bg-white shadow-sm">
                            <div class="p-4">
                                <h3 class="text-lg font-medium text-green-800">Requirements</h3>
                                <div class="mt-2 text-sm">
                                    <ul class="list-disc pl-5">
                                        <li>Form 137</li>
                                        <li>Birth Certificate</li>
                                        <li>2x2 Picture</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Next Steps Card -->
                        <div class="relative overflow-hidden rounded-xl border border-gray-200 bg-white shadow-sm">
                            <div class="p-4">
                                <h3 class="text-lg font-medium text-purple-800">Next Steps</h3>
                                <div class="mt-2 text-sm">
                                    <p>Please complete your enrollment by submitting all required documents.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Main content area -->
                    <div class="relative min-h-[50vh] flex-1 rounded-xl border border-gray-200 bg-white p-6 shadow-sm md:min-h-min">
                        <h2 class="mb-4 text-xl font-semibold">Enrollment Details</h2>
                        <div class="space-y-4">
                            <p>This section will contain your detailed enrollment information once your application is processed.</p>
                            <p>Check back soon for updates on your application status.</p>
                            <div class="h-32 bg-gray-100 rounded-md animate-pulse"></div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</template>