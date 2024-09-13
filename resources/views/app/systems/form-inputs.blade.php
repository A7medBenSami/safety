@php $editing = isset($system) @endphp

<div class="row">
    @if($editing)
    <x-inputs.group class="col-sm-12">
        <div
            x-data="imageViewer('{{ $editing && $system->image1 ? \Storage::url($system->image1) : '' }}')"
        >
            <x-inputs.partials.label
                name="image1"
                label="Image1"
            ></x-inputs.partials.label
            ><br />

            <!-- Show the image -->
            <template x-if="imageUrl">
                <img
                    :src="imageUrl"
                    class="object-cover rounded border border-gray-200"
                    style="width: 100px; height: 100px;"
                />
            </template>

            <!-- Show the gray box when image is not available -->
            <template x-if="!imageUrl">
                <div
                    class="border rounded border-gray-200 bg-gray-100"
                    style="width: 100px; height: 100px;"
                ></div>
            </template>

            <div class="mt-2">
                <input
                    type="file"
                    name="image1"
                    id="image1"
                    @change="fileChosen"
                />
            </div>

            @error('image1') @include('components.inputs.partials.error')
            @enderror
        </div>
    </x-inputs.group>
    @endif

    <x-inputs.group class="col-sm-12">
        <div
            x-data="imageViewer('{{ $editing && $system->image2 ? \Storage::url($system->image2) : '' }}')"
        >
            <x-inputs.partials.label
                name="image2"
                label="Image2"
            ></x-inputs.partials.label
            ><br />

            <!-- Show the image -->
            <template x-if="imageUrl">
                <img
                    :src="imageUrl"
                    class="object-cover rounded border border-gray-200"
                    style="width: 100px; height: 100px;"
                />
            </template>

            <!-- Show the gray box when image is not available -->
            <template x-if="!imageUrl">
                <div
                    class="border rounded border-gray-200 bg-gray-100"
                    style="width: 100px; height: 100px;"
                ></div>
            </template>

            <div class="mt-2">
                <input
                    type="file"
                    name="image2"
                    id="image2"
                    @change="fileChosen"
                />
            </div>

            @error('image2') @include('components.inputs.partials.error')
            @enderror
        </div>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <div
            x-data="imageViewer('{{ $editing && $system->image3 ? \Storage::url($system->image3) : '' }}')"
        >
            <x-inputs.partials.label
                name="image3"
                label="Image3"
            ></x-inputs.partials.label
            ><br />

            <!-- Show the image -->
            <template x-if="imageUrl">
                <img
                    :src="imageUrl"
                    class="object-cover rounded border border-gray-200"
                    style="width: 100px; height: 100px;"
                />
            </template>

            <!-- Show the gray box when image is not available -->
            <template x-if="!imageUrl">
                <div
                    class="border rounded border-gray-200 bg-gray-100"
                    style="width: 100px; height: 100px;"
                ></div>
            </template>

            <div class="mt-2">
                <input
                    type="file"
                    name="image3"
                    id="image3"
                    @change="fileChosen"
                />
            </div>

            @error('image3') @include('components.inputs.partials.error')
            @enderror
        </div>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <div
            x-data="imageViewer('{{ $editing && $system->image4 ? \Storage::url($system->image4) : '' }}')"
        >
            <x-inputs.partials.label
                name="image4"
                label="Image4"
            ></x-inputs.partials.label
            ><br />

            <!-- Show the image -->
            <template x-if="imageUrl">
                <img
                    :src="imageUrl"
                    class="object-cover rounded border border-gray-200"
                    style="width: 100px; height: 100px;"
                />
            </template>

            <!-- Show the gray box when image is not available -->
            <template x-if="!imageUrl">
                <div
                    class="border rounded border-gray-200 bg-gray-100"
                    style="width: 100px; height: 100px;"
                ></div>
            </template>

            <div class="mt-2">
                <input
                    type="file"
                    name="image4"
                    id="image4"
                    @change="fileChosen"
                />
            </div>

            @error('image4') @include('components.inputs.partials.error')
            @enderror
        </div>
    </x-inputs.group>
</div>
