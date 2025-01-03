<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\UpdateUserFormRequest;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController
{
    private UserService $service;

    public function __construct(UserService $service)
    {
        $this->service = $service;
    }

    public function getUsers()
    {

    }

    public function requestToBecomeContributor(Request $request)
    {
        return response()->json($this->service->requestToBecomeContributor($request));
    }

    public function getUserGuard(Request $request)
    {
        return response()->json($this->service->getUserGuard($request));
    }

    public function getStats(Request $request)
    {
        return response()->json($this->service->getStats($request));
    }

    public function getStatsById(Request $request)
    {
        return response()->json($this->service->getStatsById($request));
    }

    public function uploadAvatar(Request $request)
    {
        return response()->json($this->service->uploadAvatar($request));
    }

    public function updateUser(UpdateUserFormRequest $request)
    {
        return response()->json($this->service->updateUser($request));
    }

    public function getLandingRanking()
    {
        return response()->json($this->service->getLandingRanking());
    }
}
