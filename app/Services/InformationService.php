<?php

namespace App\Services;

use App\Services\Interfaces\InformationServiceInterface;
use Image;
use Auth;

class InformationService implements InformationServiceInterface
{
    public function updateInfo(array $data)
    {
        return \DB::transaction(function () use ( $data)
        {
            $staff = Auth::guard('staffs')->user();
            if (! empty( $data['avatar'] )) {
                $avatar = $data['avatar'];
                $filename = time().'.'. $avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );

                $data['avatar'] = '/uploads/avatars/'.$filename;
            }

            $staff->update($data);
            return $data;
        });
    }
}