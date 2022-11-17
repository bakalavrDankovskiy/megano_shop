<?php

namespace App\Orchid\Screens;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Cropper;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;

class BannerEditScreen extends Screen
{
    /**
     * @var Banner
     */
    public $banner;

    /**
     * Query data.
     *
     * @param Banner $banner
     *
     * @return array
     */
    public function query(Banner $banner): array
    {
        $banner->load('attachment');

        return [
            'banner' => $banner
        ];
    }

    /**
     * The name is displayed on the user's screen and in the headers
     */
    public function name(): ?string
    {
        return $this->banner->exists ? 'Edit banner' : 'Creating a new banner';
    }

    /**
     * The description is displayed on the user's screen under the heading
     */
    public function description(): ?string
    {
        return "Banner";
    }

    /**
     * Button commands.
     *
     * @return Link[]
     */
    public function commandBar(): array
    {
        return [
            Button::make('Create banner')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->banner->exists),

            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->banner->exists),

            Button::make('Remove')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->banner->exists),
        ];
    }

    /**
     * Views.
     *
     * @return Layout[]
     */
    public function layout(): array
    {
        return [
            Layout::rows([
                Input::make('banner.title')
                    ->title('Title')
                    ->placeholder('Attractive but mysterious title')
                    ->help('Specify a short descriptive title for this banner'),

                Cropper::make('banner.attachment_id')
                    ->targetId()
                    ->title('Large web banner image, generally in the front and center')
                    ->width(1300)
                    ->height(850),

                TextArea::make('banner.description')
                    ->title('Description')
                    ->rows(3)
                    ->maxlength(200)
                    ->placeholder('Brief description for preview'),

                TextArea::make('banner.link')
                    ->title('Link')
                    ->placeholder('Brief description for preview')
                    ->help('Specify a short descriptive Link for this banner'),
            ])
        ];
    }

    /**
     * @param Banner    $banner
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Banner $banner, Request $request)
    {
        $banner->fill($request->get('banner'))->save();

        $banner->attachment()->syncWithoutDetaching(
            $request->input('post.attachment', [])
        );
        Cache::tags(['banners'])->flush();
        Alert::info('You have successfully created a banner.');

        return redirect()->route('platform.banner.list');
    }

    /**
     * @param Banner $banner
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function remove(Banner $banner)
    {
        $banner->delete();
        Cache::tags(['banners'])->flush();
        Alert::info('You have successfully deleted the banner.');

        return redirect()->route('platform.banner.list');
    }
}
