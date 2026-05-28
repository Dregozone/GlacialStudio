<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class AdminMessageController extends Controller
{
    public function index(string $identifier, string $token): View
    {
        $this->findAdmin($identifier, $token);

        return view('pages.admin-messages', [
            'identifier' => $identifier,
            'token' => $token,
            'statuses' => ContactMessage::STATUSES,
            'messages' => ContactMessage::query()->latest()->get(),
        ]);
    }

    public function update(Request $request, string $identifier, string $token, ContactMessage $contactMessage): RedirectResponse
    {
        $this->findAdmin($identifier, $token);

        $validated = $request->validate([
            'status' => ['required', Rule::in(ContactMessage::STATUSES)],
        ]);

        $contactMessage->update([
            'status' => $validated['status'],
        ]);

        return redirect()
            ->route('admin.messages.index', [$identifier, $token])
            ->with('success', 'Message status updated.');
    }

    public function apiIndex(string $identifier, string $token): JsonResponse
    {
        $this->findAdmin($identifier, $token);

        return response()->json(
            ContactMessage::query()
                ->select(['id', 'name', 'email', 'message', 'status', 'created_at', 'updated_at'])
                ->latest()
                ->get()
        );
    }

    private function findAdmin(string $identifier, string $token): User
    {
        $admin = User::query()
            ->where('identifier', $identifier)
            ->where('is_admin', true)
            ->first();

        abort_if(
            $admin === null || ! is_string($admin->token) || ! Hash::check($token, $admin->token),
            403
        );

        return $admin;
    }
}
