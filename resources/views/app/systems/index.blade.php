@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <div style="display: flex; justify-content: space-between;">
                <h4 class="card-title">@lang('crud.systems.index_title')</h4>
            </div>

            <div class="searchbar mt-4 mb-5">
                <div class="row">
                    <div class="col-md-6">
                        <form>
                            <div class="input-group">
                                <input
                                    id="indexSearch"
                                    type="text"
                                    name="search"
                                    placeholder="{{ __('crud.common.search') }}"
                                    value="{{ $search ?? '' }}"
                                    class="form-control"
                                    autocomplete="off"
                                />
                                <div class="input-group-append">
                                    <button
                                        type="submit"
                                        class="btn btn-primary"
                                    >
                                        <i class="icon ion-md-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-borderless table-hover">
                    <thead>
                        <tr>
                            <th class="text-left">
                                @lang('crud.systems.inputs.image1')
                            </th>
                            <th class="text-left">
                                @lang('crud.systems.inputs.image2')
                            </th>
                            <th class="text-left">
                                @lang('crud.systems.inputs.image3')
                            </th>
                            <th class="text-left">
                                @lang('crud.systems.inputs.image4')
                            </th>
                            <th class="text-center">
                                @lang('crud.common.actions')
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($systems as $system)
                        <tr>
                            <td>
                                <x-partials.thumbnail
                                    src="{{ $system->image1 ? \Storage::url($system->image1) : '' }}"
                                />
                            </td>
                            <td>
                                <x-partials.thumbnail
                                    src="{{ $system->image2 ? \Storage::url($system->image2) : '' }}"
                                />
                            </td>
                            <td>
                                <x-partials.thumbnail
                                    src="{{ $system->image3 ? \Storage::url($system->image3) : '' }}"
                                />
                            </td>
                            <td>
                                <x-partials.thumbnail
                                    src="{{ $system->image4 ? \Storage::url($system->image4) : '' }}"
                                />
                            </td>
                            <td class="text-center" style="width: 134px;">
                                <div
                                    role="group"
                                    aria-label="Row Actions"
                                    class="btn-group"
                                >
                                    @can('update', $system)
                                    <a
                                        href="{{ route('systems.edit', $system) }}"
                                    >
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="icon ion-md-create"></i>
                                        </button>
                                    </a>
                                    @endcan @can('view', $system)
                                    <a
                                        href="{{ route('systems.show', $system) }}"
                                    >
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="icon ion-md-eye"></i>
                                        </button>
                                    </a>
                                    @endcan 
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5">
                                @lang('crud.common.no_items_found')
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="5">{!! $systems->render() !!}</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
