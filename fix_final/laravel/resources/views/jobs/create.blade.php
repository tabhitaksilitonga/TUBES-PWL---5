@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8 max-w-2xl">
    <a href="{{ route('jobs.index') }}" class="inline-flex items-center text-gray-600 hover:text-gray-900 mb-6 text-sm">
        ← Back to Jobs
    </a>

    <h1 class="text-3xl font-bold text-gray-900 mb-2">Post a Job</h1>
    <p class="text-gray-600 mb-8">Find the perfect designer for your project</p>

    <form action="{{ route('jobs.store') }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-xl shadow p-8">
        @csrf

        <div class="mb-6">
            <label class="block font-medium text-gray-700 mb-2">Job Title <span class="text-red-500">*</span></label>
            <input type="text" name="title" required value="{{ old('title') }}"
                class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-pink-500 focus:border-pink-500"
                placeholder="e.g., UI/UX Designer, Web Designer, Illustrator">
            @error('title') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="mb-6">
            <label class="block font-medium text-gray-700 mb-2">Company Name <span class="text-red-500">*</span></label>
            <input type="text" name="company_name" required value="{{ old('company_name') }}"
                class="w-full border border-gray-300 rounded-lg px-4 py-2.5"
                placeholder="Your company name">
            @error('company_name') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="mb-6">
            <label class="block font-medium text-gray-700 mb-2">Company Logo</label>
            <input type="file" name="company_logo"
                class="w-full border border-gray-300 rounded-lg px-4 py-2.5">
            <p class="text-xs text-gray-500 mt-1">Optional. Format: jpg, png, webp.</p>
            @error('company_logo') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
            <div>
                <label class="block font-medium text-gray-700 mb-2">Job Type <span class="text-red-500">*</span></label>
                <select name="job_type" required class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-pink-500">
                    <option value="">Select...</option>
                    <option value="full-time" {{ old('job_type')=='full-time'?'selected':'' }}>Full Time</option>
                    <option value="part-time" {{ old('job_type')=='part-time'?'selected':'' }}>Part Time</option>
                    <option value="freelance" {{ old('job_type')=='freelance'?'selected':'' }}>Freelance</option>
                    <option value="contract" {{ old('job_type')=='contract'?'selected':'' }}>Contract</option>
                </select>
                @error('job_type') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block font-medium text-gray-700 mb-2">Location</label>
                <input type="text" name="location" value="{{ old('location') }}"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2.5"
                    placeholder="Remote, Jakarta, Samarinda, etc.">
                @error('location') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>
            <div class="mb-6">
                <label class="block font-medium text-gray-700 mb-3">
                    Specialties
                </label>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                    @foreach([
                    'Animation',
                    'Brand / Graphic Design',
                    'Illustration',
                    'Leadership',
                    'Mobile Design',
                    'UI / Visual Design',
                    'Product Design',
                    'UX Design / Research',
                    'Web Design'
                    ] as $specialty)

                    <label class="flex items-center gap-3 border border-gray-200 rounded-lg px-4 py-3 cursor-pointer hover:border-pink-400">
                        <input
                            type="checkbox"
                            name="specialties[]"
                            value="{{ $specialty }}"
                            {{ in_array($specialty, old('specialties', [])) ? 'checked' : '' }}
                            class="rounded border-gray-300 text-pink-500 focus:ring-pink-500">

                        <span class="text-gray-700">
                            {{ $specialty }}
                        </span>
                    </label>

                    @endforeach
                </div>

                <p class="text-xs text-gray-500 mt-2">
                    Select the design categories related to this job.
                </p>

                @error('specialties')
                <p class="text-red-500 text-sm mt-1">{{ $message }} </p>
                @enderror
            </div>
        </div>

        <div class="mb-6">
            <label class="block font-medium text-gray-700 mb-2">Description <span class="text-red-500">*</span></label>
            <textarea name="description" required rows="8"
                class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-pink-500"
                placeholder="Describe the role, requirements, benefits, and speciality. 
Example: Speciality: UI, UX, Product Design.">{{ old('description') }}</textarea>
            <p class="text-xs text-gray-500 mt-1">Write the speciality here too, so the filter can detect it.</p>
            @error('description') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="mb-6">
            <label class="block font-medium text-gray-700 mb-2">Application URL <span class="text-red-500">*</span></label>

            <input type="url" name="apply_url" required value="{{ old('apply_url') }}"
                class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-pink-500 focus:border-pink-500"
                placeholder="https://your-company.com/careers/apply">
            <p class="text-xs text-gray-500 mt-1">Applicants will be redirected here.</p>
            @error('apply_url') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="mb-8">
            <label class="block font-medium text-gray-700 mb-2">Company Website (Optional)</label>
            <input type="url" name="website" value="{{ old('website') }}"
                class="w-full border border-gray-300 rounded-lg px-4 py-2.5"
                placeholder="https://your-company.com">
            <p class="text-xs text-gray-500 mt-1">Company website will appear in the job detail page.</p>
            @error('website') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="flex gap-4">
            <button type="submit" class="bg-pink-500 hover:bg-pink-600 text-white px-8 py-3 rounded-lg font-medium transition">
                Post Job
            </button>
            <a href="{{ route('jobs.index') }}" class="px-8 py-3 text-gray-600 hover:text-gray-800 font-medium">
                Cancel
            </a>
        </div>
    </form>
</div>
@endsection