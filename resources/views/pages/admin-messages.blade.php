<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Contact Messages</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-glacier-950 text-glacier-100 min-h-screen py-8">
<div class="container-custom">
    <h1 class="text-2xl font-display font-bold text-white mb-6">Contact Messages</h1>

    @if (session('success'))
        <div class="mb-6 rounded-xl border border-emerald-500/20 bg-emerald-500/10 px-4 py-3 text-emerald-300">
            {{ session('success') }}
        </div>
    @endif

    <div class="space-y-4">
        @forelse ($messages as $message)
            <article class="glass-card p-5">
                <div>{{ $message->created_at->format('F j, Y, g:i a') }}</div>
                
                <div class="flex items-center justify-between gap-4 mb-3">
                    <div>
                        <h2 class="font-semibold text-white">{{ $message->name }}</h2>
                        <p class="text-sm text-glacier-300">{{ $message->email }}</p>
                    </div>
                    <span class="text-xs uppercase tracking-wide px-2.5 py-1 rounded-full border border-white/10 bg-white/5">
                        {{ $message->status }}
                    </span>
                </div>

                <p class="text-sm text-glacier-200 whitespace-pre-line mb-4">{{ $message->message }}</p>

                <form method="POST" action="{{ route('admin.messages.update', [$identifier, $token, $message]) }}" class="flex flex-wrap items-center gap-3">
                    @csrf
                    @method('PATCH')

                    <label for="status-{{ $message->id }}" class="text-sm text-glacier-300">Status</label>
                    <select id="status-{{ $message->id }}" name="status" class="bg-white/5 border border-white/10 rounded-lg px-3 py-2 text-sm">
                        @foreach ($statuses as $status)
                            <option value="{{ $status }}" @selected($message->status === $status)>{{ $status }}</option>
                        @endforeach
                    </select>

                    <button type="submit" class="btn-primary">Update</button>
                </form>
            </article>
        @empty
            <div class="glass-card p-5 text-glacier-300">No contact messages yet.</div>
        @endforelse
    </div>
</div>
</body>
</html>
