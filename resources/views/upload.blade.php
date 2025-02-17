<form action="/convert-docx-to-pdf" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="docx_file" required>
    <button type="submit">Convert to PDF</button>
</form>
