@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('head')
<script src="https://cdn.jsdelivr.net/npm/xlsx@0.18.5/dist/xlsx.full.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
<div class="max-w-7xl mx-auto py-8 px-4 md:py-12 md:px-8">
    <!-- Header -->
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 mb-10">
        <div>
            <h1 class="text-3xl md:text-4xl font-bold text-white font-outfit tracking-tight">Admin Dashboard</h1>
            <p class="text-zinc-400 mt-1 text-sm md:text-base">Manage car records, bulk uploads, and duplicate filtering.</p>
        </div>
        <div class="flex items-center gap-3">
            <button onclick="location.reload()" class="flex-1 md:flex-none px-5 py-2.5 bg-blue-600/10 hover:bg-blue-600/20 text-blue-400 rounded-xl text-sm font-medium transition-all border border-blue-500/30">
                Refresh
            </button>
            <form action="{{ route('admin.logout') }}" method="POST" class="flex-1 md:flex-none">
                @csrf
                <button type="submit" class="w-full px-5 py-2.5 bg-zinc-800 hover:bg-zinc-700 text-zinc-300 rounded-xl text-sm font-medium transition-all border border-zinc-700">
                    Logout
                </button>
            </form>
        </div>
    </div>

    @if(session('success'))
        <div id="success-alert" class="mb-6 p-4 bg-emerald-500/10 border border-emerald-500/50 rounded-xl text-emerald-400 text-sm shadow-inner flex items-center gap-3">
            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            {{ session('success') }}
        </div>
    @endif

    <div id="js-alert" class="hidden mb-6 p-4 border rounded-xl text-sm shadow-inner overflow-hidden"></div>

    <!-- Stats Row -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6 mb-10">
        <div class="bg-zinc-900 border border-zinc-800 rounded-2xl p-4 md:p-5 shadow-xl flex flex-col md:flex-row items-start md:items-center gap-3 md:gap-4">
            <div class="p-2.5 bg-emerald-500/10 rounded-xl text-emerald-500">
                <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
            <div>
                <p class="text-[9px] md:text-[10px] font-bold text-zinc-500 uppercase tracking-widest">Live Cars</p>
                <p class="text-xl md:text-2xl font-bold text-white font-outfit">{{ \App\Models\Car::count() }}</p>
            </div>
        </div>
        
        <div class="bg-zinc-900 border border-zinc-800 rounded-2xl p-4 md:p-5 shadow-xl flex flex-col md:flex-row items-start md:items-center gap-3 md:gap-4">
            <div class="p-2.5 bg-blue-500/10 rounded-xl text-blue-500">
                <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
            </div>
            <div>
                <p class="text-[9px] md:text-[10px] font-bold text-zinc-500 uppercase tracking-widest">Visibility</p>
                <p class="text-xl md:text-2xl font-bold text-white font-outfit">Public</p>
            </div>
        </div>

        <div class="bg-zinc-900 border border-zinc-800 rounded-2xl p-4 md:p-5 shadow-xl flex flex-col md:flex-row items-start md:items-center gap-3 md:gap-4">
            <div class="p-2.5 bg-purple-500/10 rounded-xl text-purple-500">
                <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
            <div>
                <p class="text-[9px] md:text-[10px] font-bold text-zinc-500 uppercase tracking-widest">Update</p>
                <p class="text-xl md:text-2xl font-bold text-white font-outfit">Live</p>
            </div>
        </div>

        <div class="bg-zinc-900 border border-zinc-800 rounded-2xl p-4 md:p-5 shadow-xl flex flex-col md:flex-row items-start md:items-center gap-3 md:gap-4">
            <div class="p-2.5 bg-orange-500/10 rounded-xl text-orange-500">
                <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
            </div>
            <div>
                <p class="text-[9px] md:text-[10px] font-bold text-zinc-500 uppercase tracking-widest">Status</p>
                <p class="text-xl md:text-2xl font-bold text-white font-outfit">Active</p>
            </div>
        </div>
    </div>

    <!-- Blog Management & Upload Section -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-10">
        <!-- Blog Management Card -->
        <div class="bg-zinc-900 border border-zinc-800 rounded-2xl p-6 shadow-2xl relative overflow-hidden group">
            <div class="absolute top-0 right-0 w-32 h-32 bg-purple-500/5 rounded-full -mr-16 -mt-16 blur-3xl transition-all group-hover:bg-purple-500/10"></div>
            <h2 class="text-xl font-bold text-white mb-6 font-outfit flex items-center gap-3">
                <span class="p-2 bg-purple-500/10 rounded-lg text-purple-500">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                </span>
                Blog Management
            </h2>
            
            <div class="space-y-4">
                <div class="bg-zinc-950/50 rounded-xl p-4 border border-zinc-800">
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-[10px] font-bold text-zinc-500 uppercase tracking-widest">Total Posts</span>
                        <span class="text-lg font-bold text-white">{{\App\Models\Blog::count()}}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-[10px] font-bold text-zinc-500 uppercase tracking-widest">Published</span>
                        <span class="text-sm font-bold text-emerald-400">{{\App\Models\Blog::where('is_published', true)->count()}}</span>
                    </div>
                </div>
                
                <a href="{{ route('admin.blogs.index') }}" class="block w-full py-3 bg-purple-600/10 hover:bg-purple-600/20 text-purple-400 border border-purple-500/30 rounded-xl text-xs font-bold transition-all text-center">
                    Manage Blogs
                </a>
                <a href="{{ route('blogs.index') }}" target="_blank" class="block w-full py-3 bg-blue-600/10 hover:bg-blue-600/20 text-blue-400 border border-blue-500/30 rounded-xl text-xs font-bold transition-all text-center">
                    View Blog Page
                </a>
            </div>
        </div>

        <!-- Bulk Upload -->
        <div class="bg-zinc-900 border border-zinc-800 rounded-2xl p-6 shadow-2xl relative overflow-hidden group lg:col-span-2">
            <div class="absolute top-0 right-0 w-32 h-32 bg-purple-500/5 rounded-full -mr-16 -mt-16 blur-3xl transition-all group-hover:bg-purple-500/10"></div>
            <h2 class="text-xl font-bold text-white mb-6 font-outfit flex items-center gap-3">
                <span class="p-2 bg-purple-500/10 rounded-lg text-purple-500">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                </span>
                Bulk Upload
            </h2>
            
            <div class="space-y-6">
                <div class="border-2 border-dashed border-zinc-800 rounded-2xl p-10 text-center hover:border-purple-500/50 transition-all group cursor-pointer relative bg-zinc-950/20">
                    <input type="file" id="bulk-file-input" class="absolute inset-0 opacity-0 cursor-pointer z-10" accept=".xlsx,.xls,.csv,.sql" onchange="handleFileSelect(event)">
                    <div class="flex flex-col items-center gap-4">
                        <div class="w-12 h-12 bg-zinc-900 rounded-full flex items-center justify-center border border-zinc-800 group-hover:bg-purple-500/10 group-hover:border-purple-500/50 transition-all">
                            <svg class="w-6 h-6 text-zinc-600 group-hover:text-purple-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                        </div>
                        <div>
                            <span class="block text-sm font-semibold text-zinc-200 group-hover:text-purple-400 transition-colors">Choose a file</span>
                            <span class="block text-xs text-zinc-500 mt-1">Excel, CSV or SQL (INSERT format)</span>
                        </div>
                    </div>
                </div>
                
                <div id="bulk-stats" class="hidden animate-in fade-in slide-in-from-top-2 duration-300">
                    <div class="bg-zinc-950/50 rounded-xl p-4 border border-zinc-800 mb-4">
                        <div class="flex justify-between items-center mb-1">
                            <span class="text-[10px] font-bold text-zinc-500 uppercase tracking-widest">Total Parsed</span>
                            <span id="stat-total" class="text-sm font-bold text-white">0</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-[10px] font-bold text-zinc-500 uppercase tracking-widest">Existing Duplicates</span>
                            <span id="stat-dupes" class="text-sm font-bold text-orange-400">?</span>
                        </div>
                    </div>
                    <div class="flex gap-3">
                        <button onclick="checkDuplicates()" id="btn-check-db" class="flex-1 py-3 bg-orange-600/10 hover:bg-orange-600/20 text-orange-400 border border-orange-500/30 rounded-xl text-xs font-bold transition-all disabled:opacity-50">
                            Check Database
                        </button>
                        <button onclick="publishData()" id="btn-publish" class="hidden flex-1 py-3 bg-emerald-600/10 hover:bg-emerald-600/20 text-emerald-400 border border-emerald-500/30 rounded-xl text-xs font-bold transition-all disabled:opacity-50">
                            Publish to Live
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Preview Section (Full Width when active) -->
    <div id="bulk-preview-section" class="hidden mb-10 animate-in fade-in slide-in-from-bottom-4 duration-500">
        <div class="bg-zinc-900 border border-zinc-800 rounded-2xl p-6 shadow-2xl border-purple-500/30">
            <div class="flex items-center justify-between mb-6">
                <div class="flex items-center gap-3">
                    <div class="p-2 bg-purple-500/10 rounded-lg text-purple-400">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                    </div>
                    <h2 class="text-xl font-bold text-white font-outfit">Bulk Upload Preview</h2>
                </div>
                <button onclick="clearBulk()" class="px-4 py-1.5 bg-zinc-800 hover:bg-zinc-700 text-zinc-400 hover:text-white rounded-lg text-xs font-medium transition-all">Clear Preview</button>
            </div>
            
            <div class="overflow-x-auto border border-zinc-800 rounded-xl bg-zinc-950/30 custom-scrollbar">
                <table class="w-full text-left text-xs text-zinc-300">
                    <thead class="bg-zinc-950 text-zinc-500 uppercase tracking-widest text-[10px] font-bold sticky top-0">
                        <tr>
                            <th class="px-6 py-4 border-b border-zinc-800">Car Name</th>
                            <th class="px-6 py-4 border-b border-zinc-800">VIN Number</th>
                            <th class="px-6 py-4 border-b border-zinc-800">Mileage</th>
                            <th class="px-6 py-4 border-b border-zinc-800">Damage</th>
                            <th class="px-6 py-4 border-b border-zinc-800">Location</th>
                            <th class="px-6 py-4 border-b border-zinc-800">Status</th>
                        </tr>
                    </thead>
                    <tbody id="bulk-preview-body" class="divide-y divide-zinc-800">
                        <!-- Data rows -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Management Table -->
    <div class="bg-zinc-900 border border-zinc-800 rounded-2xl shadow-2xl overflow-hidden">
        <div class="p-6 md:p-8 flex flex-col md:flex-row md:items-center justify-between gap-4 border-b border-zinc-800">
            <h2 class="text-xl font-bold text-white font-outfit flex items-center gap-3">
                <span class="p-2 bg-blue-500/10 rounded-lg text-blue-500">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                </span>
                Manage All Cars ({{ \App\Models\Car::count() }})
            </h2>
            <div class="flex items-center gap-3">
                <form id="bulk-delete-form" action="{{ route('admin.cars.bulk-delete') }}" method="POST" class="hidden">
                    @csrf
                    <input type="hidden" name="ids" id="selected-ids">
                    <button type="submit" onclick="return confirm('Delete selected cars?')" class="px-6 py-2.5 bg-red-600/10 hover:bg-red-600/20 text-red-400 rounded-xl text-sm font-bold transition-all border border-red-500/30 active:scale-95">
                        Delete Selected (<span id="selected-count">0</span>)
                    </button>
                </form>

                <form action="{{ route('admin.cars.destroy-all') }}" method="POST" onsubmit="return confirm('⚠️ DANGER: This will delete ALL records from the live site. Proceed?')">
                    @csrf
                    <button type="submit" class="w-full md:w-auto px-6 py-2.5 bg-zinc-800 hover:bg-zinc-700 text-zinc-400 rounded-xl text-sm font-bold transition-all border border-zinc-700 active:scale-95">
                        Purge Database
                    </button>
                </form>
            </div>
        </div>

        <div class="overflow-x-auto custom-scrollbar">
            <table class="w-full text-left text-sm text-zinc-300">
                <thead class="bg-zinc-950/50 text-zinc-500 uppercase text-[10px] font-bold tracking-widest">
                    <tr>
                        <th class="px-6 py-4">
                            <input type="checkbox" id="select-all" class="rounded border-zinc-700 bg-zinc-900 text-purple-600 focus:ring-purple-500">
                        </th>
                        <th class="px-6 py-4">Vehicle</th>
                        <th class="px-6 py-4">VIN</th>
                        <th class="px-6 py-4 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-zinc-800/50">
                    @forelse($cars as $index => $car)
                        <tr class="hover:bg-zinc-800/30 transition-colors">
                            <td class="px-6 py-4">
                                <input type="checkbox" name="ids[]" value="{{ $car->id }}" class="car-checkbox rounded border-zinc-700 bg-zinc-900 text-purple-600 focus:ring-purple-500">
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 rounded-xl bg-zinc-950 border border-zinc-800 flex-shrink-0 flex items-center justify-center overflow-hidden">
                                        @if($car->car_image_url)
                                            <img src="{{ $car->car_image_url }}" class="w-full h-full object-cover" onerror="this.src='/no-img.svg'"/>
                                        @else
                                            <svg class="w-6 h-6 text-zinc-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                        @endif
                                    </div>
                                    <div>
                                        <p class="font-bold text-white line-clamp-1 text-sm">{{ $car->car_name }}</p>
                                        <div class="flex items-center gap-3 mt-1 text-[10px]">
                                            <span class="text-zinc-500 italic">{{ $car->mileage ?? 'N/A' }}</span>
                                            <span class="text-zinc-600">•</span>
                                            <span class="text-zinc-500">{{ $car->location ?? 'N/A' }}</span>
                                            <span class="text-zinc-600">•</span>
                                            <span class="text-red-500/80 font-bold uppercase">{{ $car->damage ?? 'None' }}</span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 font-mono text-cyan-400 text-xs">{{ $car->vin }}</td>
                            <td class="px-6 py-4 text-center">
                                <form action="{{ route('admin.cars.destroy', $car->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-2 bg-red-600/10 hover:bg-red-600/20 text-red-500 rounded-lg border border-red-500/20 transition-all">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-6 py-20 text-center">
                                <div class="flex flex-col items-center gap-3">
                                    <svg class="w-12 h-12 text-zinc-800" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M4 6h16M4 12h16M4 18h16"></path></svg>
                                    <p class="text-zinc-600 font-medium tracking-tight">Your live database is empty.</p>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        @if($cars->hasPages())
            <div class="p-6 border-t border-zinc-800">
                <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                    <div class="text-sm text-zinc-500">
                        Showing {{ $cars->firstItem() }} to {{ $cars->lastItem() }} of {{ $cars->total() }} cars
                    </div>
                    <div class="flex items-center gap-2">
                        @if($cars->previousPageUrl())
                            <a href="{{ $cars->previousPageUrl() }}" class="px-4 py-2 bg-zinc-800 hover:bg-zinc-700 text-zinc-300 rounded-lg text-sm font-medium transition-all border border-zinc-700">
                                ← Previous
                            </a>
                        @endif
                        
                        @foreach(range(1, $cars->lastPage()) as $page)
                            @if($page >= $cars->currentPage() - 2 && $page <= $cars->currentPage() + 2)
                                @if($page == $cars->currentPage())
                                    <span class="px-4 py-2 bg-purple-600 text-white rounded-lg text-sm font-bold">{{ $page }}</span>
                                @else
                                    <a href="{{ $cars->url($page) }}" class="px-4 py-2 bg-zinc-800 hover:bg-zinc-700 text-zinc-300 rounded-lg text-sm font-medium transition-all border border-zinc-700">{{ $page }}</a>
                                @endif
                            @endif
                        @endforeach

                        @if($cars->nextPageUrl())
                            <a href="{{ $cars->nextPageUrl() }}" class="px-4 py-2 bg-zinc-800 hover:bg-zinc-700 text-zinc-300 rounded-lg text-sm font-medium transition-all border border-zinc-700">
                                Next →
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
@endsection

@section('scripts')
<script>
    let bulkData = [];
    let duplicates = [];

    function showAlert(msg, type = 'success') {
        const el = document.getElementById('js-alert');
        el.className = `mb-6 p-4 border rounded-xl text-sm shadow-inner block animate-in fade-in slide-in-from-top-2 duration-300 ${
            type === 'success' ? 'bg-emerald-500/10 border-emerald-500/50 text-emerald-400' : 
            (type === 'error' ? 'bg-red-500/10 border-red-500/50 text-red-400' : 'bg-orange-500/10 border-orange-500/50 text-orange-400')
        }`;
        el.innerHTML = `<div class="flex items-center gap-3"><svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>${msg}</div>`;
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    function handleFileSelect(e) {
        const file = e.target.files[0];
        if (!file) return;

        const reader = new FileReader();
        showAlert(`Processing file: ${file.name}...`, "warning");

        if (file.name.endsWith('.sql')) {
            reader.onload = (event) => parseSQL(event.target.result);
            reader.readAsText(file);
        } else {
            reader.onload = (event) => {
                try {
                    const data = new Uint8Array(event.target.result);
                    const workbook = XLSX.read(data, { type: 'array' });
                    const firstSheetName = workbook.SheetNames[0];
                    const worksheet = workbook.Sheets[firstSheetName];
                    const jsonData = XLSX.utils.sheet_to_json(worksheet);
                    processExcel(jsonData);
                } catch (err) {
                    showAlert("Error reading Excel: " + err.message, "error");
                }
            };
            reader.readAsArrayBuffer(file);
        }
    }

    function parseSQL(sql) {
        const cars = [];
        const insertRegex = /INSERT INTO `?cars`?\s*\(([^)]+)\)\s*VALUES\s*([^;]+)/gi;
        let match;
        
        while ((match = insertRegex.exec(sql)) !== null) {
            const columns = match[1].split(',').map(c => c.trim().replace(/[`"]/g, ''));
            const valuesGroup = match[2].match(/\(([^)]+)\)/g);
            
            if (valuesGroup) {
                valuesGroup.forEach(group => {
                    const values = group.substring(1, group.length - 1).match(/(?:'[^']*'|[^,])+/g).map(v => v.trim().replace(/^'|'$/g, ''));
                    const car = {};
                    columns.forEach((col, i) => {
                        const lowCol = col.toLowerCase().replace(/[`"_\s]/g, '');
                        if (lowCol === 'carname' || lowCol === 'name' || lowCol === 'title' || lowCol === 'vehiclename') car.car_name = values[i];
                        else if (lowCol === 'vin' || lowCol === 'vinnumber' || lowCol === 'vin#') car.vin = values[i];
                        else if (lowCol === 'description' || lowCol === 'desc' || lowCol === 'notes') car.description = values[i];
                        else if (['carimageurl', 'image', 'url', 'photo', 'images', 'pic', 'picture', 'featureimage'].includes(lowCol)) car.car_image_url = values[i];
                        else if (['mileage', 'milage', 'miles', 'milesage', 'km', 'odometer', 'odo'].some(alias => lowCol.includes(alias))) car.mileage = values[i].replace(/^(?:mileage|milage|miles|km|odo):\s*/i, '');
                        else if (['location', 'city', 'loc', 'address', 'state'].some(alias => lowCol.includes(alias))) car.location = values[i].replace(/^(?:location|loc|addr):\s*/i, '');
                        else if (['damage', 'demage', 'status', 'condition', 'damaged', 'primarydamage', 'loss', 'losstype'].some(alias => lowCol.includes(alias))) car.damage = values[i].replace(/^(?:damage|demage|cond):\s*/i, '');
                    });
                    if (car.vin && car.car_name) cars.push(car);
                });
            }
        }
        
        if (cars.length === 0) {
            showAlert("No valid database records found in SQL file.", "error");
            return;
        }
        finalizeParse(cars);
    }

    function processExcel(data) {
        if (!data || data.length === 0) {
            showAlert("File is empty.", "error");
            return;
        }

        const cars = data.map(row => {
            const findValue = (aliases) => {
                const keys = Object.keys(row);
                for (let alias of aliases) {
                    const normalizedAlias = alias.toLowerCase().replace(/[\s_-]/g, '');
                    const foundKey = keys.find(k => {
                        const nk = k.toLowerCase().replace(/[\s_-]/g, '');
                        return nk === normalizedAlias || (nk.length > 3 && nk.includes(normalizedAlias)) || (normalizedAlias.length > 3 && normalizedAlias.includes(nk));
                    });
                    if (foundKey) return row[foundKey];
                }
                return null;
            };

            const rawMileage = findValue(['mileage', 'milage', 'miles', 'milesage', 'km', 'odometer', 'odo']);
            const rawLocation = findValue(['location', 'city', 'loc', 'address', 'state', 'branch']);
            const rawDamage = findValue(['damage', 'demage', 'status', 'condition', 'damaged', 'primary_damage', 'loss', 'loss_type']);

            const car_name = findValue(['car_name', 'carname', 'name', 'vehicle', 'title', 'vehicle_name']);
            const vin_raw = findValue(['vin', 'vinnumber', 'vin#', 'serial_number']);
            const vin = vin_raw ? vin_raw.toString().trim().toUpperCase() : null;
            
            return {
                car_name: car_name,
                vin: vin,
                description: findValue(['description', 'desc', 'notes', 'comments']),
                car_image_url: findValue(['car_image_url', 'image', 'url', 'photo', 'images', 'pic', 'picture', 'feature_image', 'img']),
                mileage: rawMileage ? rawMileage.toString().replace(/^(?:mileage|milage|miles|km|odo):\s*/i, '') : null,
                location: rawLocation ? rawLocation.toString().replace(/^(?:location|loc|addr):\s*/i, '') : null,
                damage: rawDamage ? rawDamage.toString().replace(/^(?:damage|demage|cond):\s*/i, '') : null
            };
        }).filter(c => c.vin && c.car_name);
        
        if (cars.length === 0) {
            showAlert("No valid vehicle records found. Columns must include 'Car Name' and 'VIN'.", "error");
            return;
        }
        finalizeParse(cars);
    }

    function finalizeParse(cars) {
        bulkData = cars;
        duplicates = [];
        document.getElementById('stat-total').innerText = cars.length;
        document.getElementById('stat-dupes').innerText = "?";
        document.getElementById('stat-dupes').className = "text-orange-400";
        document.getElementById('bulk-stats').classList.remove('hidden');
        document.getElementById('btn-publish').classList.add('hidden');
        window.current_vins = cars.map(c => c.vin);
        renderPreview();
        showAlert(`Successfully parsed ${cars.length} vehicles. Now run 'Check Database'.`, "success");
    }

    function renderPreview() {
        const body = document.getElementById('bulk-preview-body');
        body.innerHTML = '';
        
        bulkData.slice(0, 50).forEach(car => {
            const isDupe = duplicates.includes(car.vin);
            const row = document.createElement('tr');
            row.className = `hover:bg-zinc-800/30 transition-colors ${isDupe ? 'bg-orange-600/5 opacity-80' : ''}`;
            row.innerHTML = `
                <td class="px-6 py-4 font-bold text-white">${car.car_name}</td>
                <td class="px-6 py-4 font-mono ${isDupe ? 'text-orange-400' : 'text-cyan-400'}">${car.vin}</td>
                <td class="px-6 py-4 text-zinc-400">${car.mileage || '-'}</td>
                <td class="px-6 py-4 text-red-400">${car.damage || '-'}</td>
                <td class="px-6 py-4 text-zinc-500">${car.location || '-'}</td>
                <td class="px-6 py-4">
                    ${isDupe ? '<span class="inline-flex px-2 py-0.5 bg-orange-500/10 text-orange-500 rounded text-[9px] font-bold">EXISTS</span>' : '<span class="text-emerald-500 font-bold">New</span>'}
                </td>
            `;
            body.appendChild(row);
        });

        if (bulkData.length > 50) {
            const row = document.createElement('tr');
            row.innerHTML = `<td colspan="4" class="px-6 py-4 text-center text-zinc-600 italic">Showing first 50 of ${bulkData.length} records...</td>`;
            body.appendChild(row);
        }

        document.getElementById('bulk-preview-section').classList.remove('hidden');
    }

    async function checkDuplicates() {
        const btns = document.getElementById('btn-check-db');
        btns.innerText = "Checking DB...";
        btns.disabled = true;

        try {
            const res = await fetch("{{ route('admin.cars.check-vins') }}", {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({ vins: window.current_vins })
            });

            if (!res.ok) {
                const text = await res.text();
                throw new Error(`Server returned ${res.status}: ${text.substring(0, 100)}...`);
            }

            const data = await res.json();
            duplicates = data.existingVins || [];
            
            document.getElementById('stat-dupes').innerText = duplicates.length;
            document.getElementById('stat-dupes').className = duplicates.length > 0 ? "text-red-500" : "text-emerald-500";
            
            document.getElementById('btn-publish').classList.remove('hidden');
            if (bulkData.length > duplicates.length) {
                showAlert(`Scan finished. ${bulkData.length - duplicates.length} new records found. ${duplicates.length} will be updated.`, "success");
            } else {
                showAlert(`Scan finished. All ${duplicates.length} records already exist and will be updated with new details.`, "warning");
            }
            
            renderPreview();
        } catch (err) {
            console.error(err);
            showAlert("Duplicate check failed: " + err.message, "error");
        } finally {
            btns.innerText = "Check Database";
            btns.disabled = false;
        }
    }

    async function publishData() {
        if (bulkData.length === 0) return;

        const btn = document.getElementById('btn-publish');
        const originalText = btn.innerText;
        btn.disabled = true;

        const chunkSize = 500;
        let processed = 0;
        let totalCreated = 0;

        try {
            for (let i = 0; i < bulkData.length; i += chunkSize) {
                const chunk = bulkData.slice(i, i + chunkSize);
                btn.innerText = `Publishing ${i + chunk.length}/${bulkData.length}...`;

                const res = await fetch("{{ route('admin.cars.bulk') }}", {
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify({ cars: chunk })
                });

                if (!res.ok) {
                    const text = await res.text();
                    throw new Error(`Server error ${res.status} at chunk ${i}: ${text.substring(0, 100)}...`);
                }

                const result = await res.json();
                if (result.success) {
                    totalCreated += result.count;
                } else {
                    throw new Error("Publish failed: " + result.error);
                }
            }

            showAlert(`Successfully processed all ${bulkData.length} vehicles!`, "success");
            setTimeout(() => location.reload(), 2000);
        } catch (err) {
            console.error(err);
            showAlert("Error during publishing: " + err.message, "error");
            btn.innerText = "Resume Publish";
            btn.disabled = false;
        }
    }

    function clearBulk() {
        bulkData = [];
        duplicates = [];
        document.getElementById('bulk-stats').classList.add('hidden');
        document.getElementById('bulk-preview-section').classList.add('hidden');
        document.getElementById('bulk-file-input').value = '';
        showAlert("Bulk preview cleared.", "success");
    }

    // Bulk Delete Selection logic
    const selectAll = document.getElementById('select-all');
    const checkboxes = document.querySelectorAll('.car-checkbox');
    const bulkDeleteForm = document.getElementById('bulk-delete-form');
    const selectedIdsInput = document.getElementById('selected-ids');
    const selectedCountSpan = document.getElementById('selected-count');

    function updateBulkDeleteUI() {
        const checked = Array.from(checkboxes).filter(cb => cb.checked);
        const ids = checked.map(cb => cb.value);
        
        selectedCountSpan.innerText = ids.length;
        selectedIdsInput.value = JSON.stringify(ids);
        
        if (ids.length > 0) {
            bulkDeleteForm.classList.remove('hidden');
        } else {
            bulkDeleteForm.classList.add('hidden');
        }
    }

    if (selectAll) {
        selectAll.addEventListener('change', () => {
            checkboxes.forEach(cb => cb.checked = selectAll.checked);
            updateBulkDeleteUI();
        });
    }

    checkboxes.forEach(cb => {
        cb.addEventListener('change', () => {
            const allChecked = Array.from(checkboxes).every(c => c.checked);
            selectAll.checked = allChecked;
            updateBulkDeleteUI();
        });
    });
</script>
@endsection
