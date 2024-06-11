<section class="table__header">
    {{-- <h1>Sistem Pendukung Keputusan</h1> --}}
    <a href="javascript:void(0);" class="btn-add" data-id="kriteria">Kriteria</a> 
    <a href="javascript:void(0);" class="btn-add" data-id="sub-kriteria">Sub-Kriteria</a>
    <a href="javascript:void(0);" class="btn-add" data-id="normalisasi">SPK</a>
    {{-- <a href="javascript:void(0);" class="btn-add" data-id="normalisasi">Normalisasi</a> --}}
    {{-- <a href="javascript:void(0);" class="btn-add" data-id="perhitungan">Perhitungan</a>
    <a href="javascript:void(0);" class="btn-add" data-id="perankingan">Perankingan</a> --}}
</section>
<section class="table__body">    
    <div data-id="kriteria" style="display: none;">
        @include('page.sub-menu-bansos.kriteria')
    </div>
    <div data-id="sub-kriteria" style="display: none;">
        @include('page.sub-menu-bansos.sub-kriteria')
    </div>
    <div data-id="normalisasi" style="display: none;">
        @include('page.sub-menu-bansos.normalisasi')
    </div>
    {{-- <div data-id="perhitungan" style="display: none;"> --}}
        {{-- @include('page.sub-menu-bansos.perhitungan') --}}
    {{-- </div> --}}
    {{-- <div data-id="perankingan" style="display: none;"> --}}
        
    {{-- </div> --}}
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const btnAdd = document.querySelectorAll(".btn-add");
        btnAdd.forEach((btn) => {
            btn.addEventListener("click", function() {
                const id = this.getAttribute('data-id');
                const table = document.querySelector(`div[data-id="${id}"]`);
                table.style.display = table.style.display === "none" ? "block" : "none";
            });
        });
    });
</script>