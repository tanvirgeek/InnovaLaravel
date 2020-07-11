<?php

namespace App\Http\Controllers;

use App\PdfFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function uploadPdf(Request $request)
    {
        $this->validate($request, [
            'myfile' => 'required|max:51000|mimes:pdf',
        ]);

        try{
            $file = $request->myfile;
            $orginalFileName = $file->getClientOriginalName();
            $newFileName = time() . '.' .$file->extension();
            $file->move('uploads', $newFileName);

            PdfFile::create([
                'name' => $orginalFileName,
                'uploaded_as' => $newFileName,
                'user_id'     => auth()->user()->id
            ]);

            return back()->with(['success' => 'File Upload Successful']);

        }catch (\Exception $e){
            return back()->with(['error' => 'Something Went Wrong']);
        }


    }


    public function showFiles()
    {
        $pdfs = PdfFile::orderby('id', 'DESC')->paginate(40);
        return view('admin.files', compact('pdfs'));
    }

    public function deleteFile($id)
    {
        $pdf = PdfFile::where('id', $id)->first();
        $pdf->destroy($id);
        //remove file from storage
        unlink('uploads/' . $pdf->uploaded_as);

        return back()->with(['message' => 'Deleted The File']);
    }
}
