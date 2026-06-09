@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-10">

    <div class="mb-6">
        <a href="{{ url('/') }}" class="inline-flex items-center text-sm font-medium text-gray-500 hover:text-pink-600 transition-colors gap-1">
            <span>←</span> Back to Home
        </a>
    </div>

    <div class="mb-8 border-b border-gray-200 pb-5">
        <h1 class="text-3xl font-extrabold text-gray-900 tracking-tight mb-2">Project Inquiries</h1>
        <p class="text-gray-500 text-sm">Daftar penawaran proyek dan ajakan kerja sama dari calon klien yang masuk ke portofolio Anda.</p>
    </div>

    @if($inquiries->isEmpty())
    <div class="bg-white border border-gray-200 rounded-2xl p-16 text-center shadow-sm">
        <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-gray-100 text-gray-400 mb-4">
            📂
        </div>
        <p class="text-gray-600 font-medium text-lg">Belum ada penawaran proyek</p>
        <p class="text-gray-400 text-sm mt-1">Semua inquiry dari klien untuk postingan Anda akan muncul di sini.</p>
    </div>
    @else
    <div class="bg-white border border-gray-200 rounded-2xl shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full table-fixed divide-y divide-gray-200 text-left">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="w-1/5 px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">Klien</th>
                        <th scope="col" class="w-1/5 px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">Postingan Terkait</th>
                        <th scope="col" class="w-2/5 px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">Detail Proyek</th>
                        <th scope="col" class="w-1/5 px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">Target & Budget</th>
                        <th scope="col" class="w-1/5 px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-white">
                    @foreach($inquiries as $inquiry)
                    <tr class="hover:bg-gray-50/70 transition-colors">

                        <td class="px-6 py-5 whitespace-nowrap">
                            <div class="flex flex-col">
                                <span class="font-semibold text-gray-900 text-sm truncate">
                                    {{ $inquiry->user->full_name ?? 'User' }}
                                </span>
                                <span class="text-xs text-gray-400 mt-0.5">
                                    {{ '@' . ($inquiry->user->username ?? 'anonim') }}
                                </span>
                            </div>
                        </td>

                        <td class="px-6 py-5">
                            <div class="truncate">
                                <span class="inline-flex items-center text-xs font-medium text-gray-700 bg-gray-100 px-2.5 py-1 rounded-md border border-gray-200 truncate max-w-full">
                                    {{ $inquiry->shot->title ?? 'Postingan Dihapus' }}
                                </span>
                            </div>
                        </td>

                        <td class="px-6 py-5">
                            <p class="text-sm text-gray-600 line-clamp-3 break-words leading-relaxed pr-4">
                                {{ $inquiry->project_details }}
                            </p>
                        </td>

                        <td class="px-6 py-5 whitespace-nowrap">
                            <div class="text-sm text-gray-600 space-y-1">
                                <div class="flex items-center gap-1.5 text-xs text-gray-500">
                                    <span>📅</span>
                                    <span>{{ $inquiry->target_date }}</span>
                                </div>
                                <div class="font-bold text-pink-600 text-sm">
                                    {{ $inquiry->recommend_budget ? 'Rekomendasi Desainer' : 'Rp ' . number_format($inquiry->project_budget, 0, ',', '.') }}
                                </div>
                            </div>
                        </td>

                        <td class="px-6 py-5 text-center">
                            <div class="inline-flex flex-col items-center justify-center">
                                <span class="px-3 py-1.5 bg-gray-100 border border-gray-200 text-gray-700 text-sm font-semibold rounded-lg shadow-sm select-all">
                                    {{ $inquiry->contact_person ?? 'Tidak mengisi kontak' }}
                                </span>
                            </div>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endif

</div>
@endsection