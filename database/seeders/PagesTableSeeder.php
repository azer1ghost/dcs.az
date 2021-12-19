<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;
use App\Models\Page;
use TCG\Voyager\Models\Permission;

class PagesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        //Data Type
        $dataType = $this->dataType('slug', 'pages');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'pages',
                'display_name_singular' => __('voyager::seeders.data_types.page.singular'),
                'display_name_plural'   => __('voyager::seeders.data_types.page.plural'),
                'icon'                  => 'voyager-file-text',
                'model_name'            => 'App\\Models\\Page',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }

        //Data Rows
        $pageDataType = DataType::where('slug', 'pages')->firstOrFail();
        $dataRow = $this->dataRow($pageDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => __('voyager::seeders.data_rows.id'),
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => 1,
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'author_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('voyager::seeders.data_rows.author'),
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => 2,
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'author_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('voyager::seeders.data_rows.author'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => 2,
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'title');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('voyager::seeders.data_rows.title'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 3,
                'details'      => [
                    'display' => [
                        'width' => '3',
                    ],
                ],
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'heading');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => "Heading",
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 3,
                'details'      => [
                    'display' => [
                        'width' => '3',
                    ],
                ],
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'excerpt');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text_area',
                'display_name' => __('voyager::seeders.data_rows.excerpt'),
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 4,
                'details'      => [
                    'display' => [
                        'width' => '3',
                    ],
                ],
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'body');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'rich_text_box',
                'display_name' => __('voyager::seeders.data_rows.body'),
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 1,
                'details'      => [
                    'display' => [
                        'width' => '5',
                    ],
                ],
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'slug');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('voyager::seeders.data_rows.slug'),
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    'slugify' => [
                        'origin' => 'title',
                    ],
                    'validation' => [
                        'rule'  => 'unique:pages,slug',
                    ],
                    'display' => [
                        'width' => '3',
                    ],
                ],
                'order' => 5,
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'meta_description');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text_area',
                'display_name' => __('voyager::seeders.data_rows.meta_description'),
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 6,
                'details'      => [
                    'display' => [
                        'width' => '5',
                    ],
                ],
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'meta_keywords');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text_area',
                'display_name' => __('voyager::seeders.data_rows.meta_keywords'),
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 7,
                'details'      => [
                    'display' => [
                        'width' => '5',
                    ],
                ],
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'status');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => __('voyager::seeders.data_rows.status'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 8,
                'details'      => [
                    'default' => 'INACTIVE',
                    'options' => [
                        'INACTIVE' => 'DISABLED',
                        'ACTIVE'   => 'ACTIVE',
                    ],
                    'display' => [
                        'width' => '2',
                    ],
                ],
                'order' => 9,
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'show_contact');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'checkbox',
                'display_name' => 'Show Contact Section',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 4,
                'details'      => [
                    'display' => [
                        'width' => '1',
                    ],
                ],
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('voyager::seeders.data_rows.created_at'),
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => 10,
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('voyager::seeders.data_rows.updated_at'),
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => 11,
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'btnText');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => "Button text",
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 12,
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'btnColor');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => "Button Color",
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 13,
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'btnLink');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => "Button Link",
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 13,
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'image');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'image',
                'display_name' => __('voyager::seeders.data_rows.page_image'),
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 2,
                'details'      => [
                    'display' => [
                        'width' => '3',
                    ],
                ],
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'images');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'multiple_images',
                'display_name' => "Images",
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    'display' => [
                        'width' => '5',
                    ],
                    'resize' => [
                        'width'  => '800',
                        'height' => 'null',
                    ],
                    'quality'    => '90%',
                    'upsize'     => true,
                ],
                'order' => 3,
            ])->save();
        }

        //Menu Item
        $menu = Menu::where('name', 'admin')->firstOrFail();
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('voyager::seeders.menu_items.pages'),
            'url'     => '',
            'route'   => 'voyager.pages.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-file-text',
                'color'      => null,
                'parent_id'  => null,
                'order'      => 7,
            ])->save();
        }

        //Permissions
        Permission::generateFor('pages');
        //Content

        $page = Page::firstOrNew([
            'slug' => '/',
        ]);
        if (!$page->exists) {
            $page->fill([
                'author_id' => 0,
                'title'     => 'Title of website',
                'excerpt'   => 'Hang the jib olly',
                'btnText'   => 'Haqqimizda',
                'btnColor'  => '/display_none',
                'btnLink'   => '#',
                'body'      => '<p>Vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti.accusamus et iusto odio .</p>',
                'image'            => 'pages/page1.jpg',
                'meta_description' => null,
                'meta_keywords'    => null,
                'status'           => 'ACTIVE',
                'key'              => 'homepage',
            ])->save();
        }

        $page = Page::firstOrNew([
            'slug' => 'services',
        ]);
        if (!$page->exists) {
            $page->fill([
                'author_id' => 0,
                'title'     => 'Services',
                'btnText'   => 'nope',
                'btnColor'  => 'nope',
                'btnLink'   => 'nope',
                'excerpt'   => 'Hang the jib grog grog lly gabi',
                'body'      => '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper</p>',
                'image'            => 'pages/page1.jpg',
                'meta_description' => null,
                'meta_keywords'    => null,
                'status'           => 'ACTIVE',
                'key'              => 'services',
            ])->save();
        }

        $page = Page::firstOrNew([
            'slug' => 'products',
        ]);
        if (!$page->exists) {
            $page->fill([
                'author_id' => 0,
                'title'     => 'Products',
                'btnText'   => 'nope',
                'btnColor'  => 'nope',
                'btnLink'   => 'nope',
                'excerpt'   => 'Hang the jib grog grog lly gabi',
                'body'      => '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper</p>',
                'image'            => 'pages/page1.jpg',
                'meta_description' => null,
                'meta_keywords'    => null,
                'status'           => 'ACTIVE',
                'key'              => 'products',
            ])->save();
        }

        $page = Page::firstOrNew([
            'slug' => 'blog',
        ]);
        if (!$page->exists) {
            $page->fill([
                'author_id' => 0,
                'title'     => 'Blog',
                'excerpt'   => 'nope',
                'body'      => '/display_none',
                'btnText'   => '/display_none',
                'btnColor'  => '/display_none',
                'btnLink'   => '/display_none',
                'image'            => 'pages/page1.jpg',
                'meta_description' => null,
                'meta_keywords'    => null,
                'status'           => 'ACTIVE',
                'key'              => 'blog',
            ])->save();
        }


        $page = Page::firstOrNew([
            'slug' => 'solutions',
        ]);
        if (!$page->exists) {
            $page->fill([
                'author_id' => 0,
                'title'     => 'Solutions',
                'excerpt'   => 'nope',
                'body'      => 'nope',
                'btnText'   => 'nope',
                'btnColor'  => 'nope',
                'btnLink'   => 'nope',
                'image'            => 'pages/page1.jpg',
                'meta_description' => null,
                'meta_keywords'    => null,
                'status'           => 'ACTIVE',
                'key'              => 'solutions',
            ])->save();
        }


        $page = Page::firstOrNew([
            'slug' => 'about',
        ]);
        if (!$page->exists) {
            $page->fill([
                'author_id' => 0,
                'title'     => 'About',
                'excerpt'   => 'Lorem ipsumercitationem',
                'body'   => '<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam consequatur eveniet quisquam vero. Animi dignissimos est exercitationem harum hic inventore molestiae nulla officia tempora tempore? Est iure necessitatibus perferendis vel?</span> </p>',
                'image'            => 'pages/page1.jpg',
                'meta_description' => null,
                'meta_keywords'    => null,
                'status'           => 'ACTIVE',
                'key'              => 'about',
                'btnText'   => 'nope',
                'btnColor'  => 'nope',
                'btnLink'   => 'nope',
            ])->save();
        }

        $page = Page::firstOrNew([
            'slug' => 'contact',
        ]);
        if (!$page->exists) {
            $page->fill([
                'author_id' => 0,
                'title'     => 'Contact',
                'excerpt'   => 'Lorem ipsumercitationem',
                'body'   => '<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam consequatur eveniet quisquam vero. Animi dignissimos est exercitationem harum hic inventore molestiae nulla officia tempora tempore? Est iure necessitatibus perferendis vel?</span> </p>',
                'image'            => 'pages/page1.jpg',
                'meta_description' => null,
                'meta_keywords'    => null,
                'status'           => 'ACTIVE',
                'key'              => 'contact',
                'btnText'   => 'nope',
                'btnColor'  => 'nope',
                'btnLink'   => 'nope',
            ])->save();
        }

        $page = Page::firstOrNew([
            'slug' => 'scope-of-application',
        ]);
        if (!$page->exists) {
            $page->fill([
                'author_id' => 0,
                'title'     => 'Scope of application',
                'excerpt'   => 'Lorem ipsumercitationem',
                'body'   => '<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam consequatur eveniet quisquam vero. Animi dignissimos est exercitationem harum hic inventore molestiae nulla officia tempora tempore? Est iure necessitatibus perferendis vel?</span> </p>',
                'image'            => 'pages/page1.jpg',
                'meta_description' => null,
                'meta_keywords'    => null,
                'status'           => 'ACTIVE',
                'key'              => 'applications',
                'btnText'   => 'nope',
                'btnColor'  => 'nope',
                'btnLink'   => 'nope',
            ])->save();
        }

    }

    /**
     * [dataRow description].
     *
     * @param [type] $type  [description]
     * @param [type] $field [description]
     *
     * @return [type] [description]
     */
    protected function dataRow($type, $field)
    {
        return DataRow::firstOrNew([
            'data_type_id' => $type->id,
            'field'        => $field,
        ]);
    }

    /**
     * [dataType description].
     *
     * @param [type] $field [description]
     * @param [type] $for   [description]
     *
     * @return [type] [description]
     */
    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }
}
