<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CmeProgram;
use App\Models\CmeRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use TCPDF;
use TCPDF_FONTS;

class DashboardsController extends Controller
{

    public function index()
    {
        $organization_id = Auth::guard('members')->user()->organization_id;
        // dd($organization_id);
        $ongoings = CmeProgram::where('organization_id', $organization_id)->where('status', 1)->get();
        
        $upcommings = CmeProgram::where('organization_id', $organization_id)->where('status', 0)->get();
        // dd($ongoings);
        return view('frontend.member.dashboard', compact('ongoings', 'upcommings','organization_id'));
    }

    public function singlepage($id)
    {
        $member = Auth::guard('members')->user();
        $registered = CmeRegistration::where('cme_id',$id)->where('member_id',$member->id)->first();
    
        $program = CmeProgram::find($id);
        // dd($program);

        return view('frontend.singlepage.programsinglepage', compact('program','member','registered'));
    }

    public function cmeregister(Request $request){
        
        $req = $request->all();
        $req['member_id'] = Auth::guard('members')->user()->id;
        CmeRegistration::create($req);
        return redirect()->back()->with('popsuccess','registration sucess');
    }
    public function downloadPDF($id)
    {
        // dd($id);
      
        $CmeRegistration = CmeRegistration::where('cme_id',$id)->where('status','verified')->first();
// dd($data->cme);     
        // $program = $data->cme; 

        $data = [
            'CmeRegistration' => $CmeRegistration,
            'program' => $CmeRegistration->cme
        ];
        $html = view('pdf', $data)->render();

     
        $pdf = new TCPDF();

        // Set document information
        $pdf->SetCreator('Laravel');
        $pdf->SetAuthor('Your Name');
        $pdf->SetTitle('PDF Example');
        $pdf->SetSubject('TCPDF Tutorial');
        $pdf->SetKeywords('TCPDF, PDF, example, test, guide');

      
        $pdf->setHeaderFont([PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN]);
        $pdf->setFooterFont([PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA]);

   
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

    
        $pdf->SetMargins(PDF_MARGIN_LEFT, 0, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(0);
        $pdf->SetFooterMargin(0);

   
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

      
        $pdf->AddPage();
        $fontFile = public_path('fonts/Sofia-Regular.ttf');
        $fontname = TCPDF_FONTS::addTTFfont($fontFile, 'TrueTypeUnicode', '', 32);
        $pdf->SetFont($fontname, '', 12);
       
        $pdf->writeHTML($html, true, false, true, false, '');

       
        $pdf->Output('cerificatie.pdf', 'D'); 
    }
}
