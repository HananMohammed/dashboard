<?php


namespace App\repository;


use App\Http\Requests\Certificates;
use App\Http\Requests\CertificatesUpdate;

class certificatesRepositry
{
    /**
     * retrieve data from our storage
     *
     * @return \App\Certificates[]|\Illuminate\Database\Eloquent\Collection
     */

    public function certificatesData(){

       return $certificates=\App\Certificates::all();

    }


    /**
     * @param Certificates $request
     * @param \App\Certificates $certificates
     */
    public function store(Certificates $request,\App\Certificates $certificates){
        $certificates->about_certificates_en=$request->about_certificates_en;
        $certificates->about_certificates_ar=$request->about_certificates_ar;
        $certificates->alt_certificates_1=$request->alt_certificates_1;
        $certificates->alt_certificates_2=$request->alt_certificates_2;
        $image=new UploadImage('certificates1','certificates',$request->certificates_1);
        $certificates->certificates_1=$image->UploadeImage();
        $image2=new UploadImage('certificates2','certificates',$request->certificates_2);
        $certificates->certificates_2=$image2->UploadeImage();
        $certificates->save();
    }

    /**
     * @param CertificatesUpdate $request
     *
     * @param $id
     */
    public function update(CertificatesUpdate $request,$id){

        $certificates=\App\Certificates::find($id);
        $certificates->about_certificates_en=$request->about_certificates_en;
        $certificates->about_certificates_ar=$request->about_certificates_ar;
        $certificates->alt_certificates_1=$request->alt_certificates_1;
        $certificates->alt_certificates_2=$request->alt_certificates_2;
        if($request->certificates_1) {
            $image = new UploadImage('certificates1', 'certificates', $request->certificates_1);
            $certificates->certificates_1 = $image->UploadeImage();
        }
        if($request->certificates_2) {
            $image2 = new UploadImage('certificates2', 'certificates', $request->certificates_2);
            $certificates->certificates_2 = $image2->UploadeImage();
        }
        $certificates->save();
    }

}