<?php

namespace App\Http\Controllers\Admin;

use App\Models\Video;
use Flasher\Toastr\Prime\ToastrInterface;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Yajra\DataTables\DataTables;

class VideoController extends BaseController
{
    protected $toastr;

    public function __construct(ToastrInterface $toastr)
    {
        $this->toastr = $toastr;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $videos = Video::latest()->get();

            return DataTables::of($videos)
                ->addIndexColumn()
                ->addColumn('video_file', function ($row) {
                    return $row->video_file
                        ? '<video src="' . asset($row->video_file) . '" style="width:100px; height:60px; object-fit:cover; border-radius:5px;" controls></video>'
                        : '<span class="badge bg-secondary">No Video</span>';
                })
                ->addColumn('action', function ($row) {
                    $btn = '<div class="d-flex align-items-center justify-content-center gap-1">';

                    $btn .= '<a href="javascript:void(0)"
                                class="btn btn-primary btn-sm edit"
                                data-id="' . $row->id . '"
                                data-bs-toggle="modal"
                                data-bs-target="#editModal"
                                title="Edit">
                                <i class="fa fa-edit"></i>
                            </a>';

                    $btn .= '<button class="btn btn-danger btn-sm delete"
                                data-id="' . $row->id . '"
                                title="Delete">
                                <i class="fa fa-trash"></i>
                            </button>
                            <form id="delete-form-' . $row->id . '"
                                  action="' . route('video.destroy', $row->id) . '"
                                  method="POST" style="display:none;">
                                ' . csrf_field() . method_field('DELETE') . '
                            </form>';

                    $btn .= '</div>';
                    return $btn;
                })
                ->rawColumns(['video_file', 'action'])
                ->make(true);
        }

        return view('admin.pages.video.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'video_file' => 'nullable|mimetypes:video/mp4,video/avi,video/mpeg,video/quicktime,video/webm|max:51200',
        ]);

        Video::newVideo($request);

        $this->toastr->success('Video uploaded successfully!');
        return back();
    }

    public function edit(Video $video)
    {
        return view('admin.pages.video.edit', compact('video'));
    }

    public function update(Request $request, Video $video)
    {
        $request->validate([
            'video_file' => 'nullable|mimetypes:video/mp4,video/avi,video/mpeg,video/quicktime,video/webm|max:51200',
        ]);

        Video::updateVideo($request, $video->id);

        $this->toastr->success('Video updated successfully!');
        return back();
    }

    public function destroy($id)
    {
        $video = Video::findOrFail($id);
        Video::deleteVideo($video);

        $this->toastr->success('Video deleted successfully!');
        return back();
    }
}