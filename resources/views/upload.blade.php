{{-- #38 Upload file | upload and display image --}}
<div>
    <h1>Upload File</h1>
    <form action="upload" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file">
        <button>Upload file</button>
    </form>
</div>
