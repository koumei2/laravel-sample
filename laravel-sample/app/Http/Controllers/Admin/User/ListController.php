<?php

namespace App\Http\Controllers\Admin\User;

use App\Models\User;
use Illuminate\View\View;

class ListController extends \App\Http\Controllers\Controller
{
    public function index(): View
    {
        $users = User::orderBy('id', 'asc')->get();

        $heads = [
            'ID',
            '名前',
            'E-mail',
            '作成日時',
            '最終更新日時',
            ['label' => '操作', 'no-export' => true, 'width' => 15],
        ];

        $config = [
            'data' => $users->map(function ($user) {
                return([
                    $user->id,
                    $user->name,
                    $user->email,
                    $user->created_at?->format('Y-m-d H:i:s'),
                    $user->updated_at?->format('Y-m-d H:i:s'),
                    '',
                ]);
            }),
            'order' => [[0, 'asc']],
            'columns' => [null, null, null, null, null, ['orderable' => false]],
            'language' => [
                'url' => "https://cdn.datatables.net/plug-ins/1.10.24/i18n/Japanese.json"
            ]
        ];

        return view('admin.user.index', compact('heads', 'config'));
    }
}
