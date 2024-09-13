@php $editing = isset($pdf) @endphp

<div class="row">
    @if($editing)
    <x-inputs.group class="col-sm-12">
        <x-inputs.partials.label
            name="file"
            label="File"
        ></x-inputs.partials.label
        ><br />

        <input type="file" name="file" id="file" class="form-control-file" />

        @if($editing && $pdf->file)
        <div class="mt-2">
            <a href="{{ \Storage::url($pdf->file) }}" target="_blank"
                ><i class="icon ion-md-download"></i>&nbsp;Download</a
            >
        </div>
        @endif @error('file') @include('components.inputs.partials.error')
        @enderror
    </x-inputs.group>
    @endif
</div>
