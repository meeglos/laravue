<?php


use App\Note;
use App\Category;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ApiNoteTest extends TestCase
{
    use DatabaseTransactions;

    protected $note = 'This is a note';

    function test_list_notes()
    {
        $category = factory(Category::class)->create();
        $notes = factory(Note::class)->times(2)->create([
            'category_id' => $category->id,
            'note' => 'Esta es una nota'
        ]);
        $this->get('api/v1/notes')
            ->assertResponseOk() // 200
            ->seeJsonEquals(Note::all()->toArray());
    }
    function test_can_create_a_note()
    {
        $category = factory(Category::class)->create();
        $this->post('api/v1/notes', [
            'note'        => $this->note,
            'category_id' => $category->id,
        ]);
        $this->seeInDatabase('notes', [
            'note' => $this->note,
            'category_id' => $category->id,
        ]);
        $this->seeJsonEquals([
            'success' => true,
            'note' => Note::first()->toArray(),
        ]);
    }
}
