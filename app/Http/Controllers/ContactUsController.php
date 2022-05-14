<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateContactUsRequest;
use App\Http\Requests\UpdateContactUsRequest;
use App\Repositories\ContactUsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ContactUsController extends Controller
{
    /** @var  ContactUsRepository */
    private $contactUsRepository;

    public function __construct(ContactUsRepository $contactUsRepo)
    {
        $this->contactUsRepository = $contactUsRepo;
    }

    /**
     * Display a listing of the ContactUs.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $contactus = $this->contactUsRepository->all();

        return view('contactus.index')
            ->with('contactus', $contactus);
    }

    /**
     * Show the form for creating a new ContactUs.
     *
     * @return Response
     */
    public function create()
    {
        return view('contactus.create');
    }

    /**
     * Store a newly created ContactUs in storage.
     *
     * @param CreateContactUsRequest $request
     *
     * @return Response
     */
    public function store(CreateContactUsRequest $request)
    {
        $input = $request->all();

        $contactUs = $this->contactUsRepository->create($input);

        parent::successMessage('Contact Us saved successfully.');

        return redirect(route('contactus.index'));
    }

    /**
     * Display the specified ContactUs.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $contactUs = $this->contactUsRepository->find($id);

        if (empty($contactUs)) {
            parent::dangerMessage('Contact Us not found');

            return redirect(route('contactus.index'));
        }

        return view('contactus.show')->with('contactUs', $contactUs);
    }

    /**
     * Show the form for editing the specified ContactUs.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $contactUs = $this->contactUsRepository->find($id);

        if (empty($contactUs)) {
            parent::dangerMessage('Contact Us not found');

            return redirect(route('contactus.index'));
        }

        return view('contactus.edit')->with('contactUs', $contactUs);
    }

    /**
     * Update the specified ContactUs in storage.
     *
     * @param int $id
     * @param UpdateContactUsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateContactUsRequest $request)
    {
        $contactUs = $this->contactUsRepository->find($id);

        if (empty($contactUs)) {
            parent::dangerMessage('Contact Us not found');

            return redirect(route('contactus.index'));
        }

        $contactUs = $this->contactUsRepository->update($request->all(), $id);

        parent::successMessage('Contact Us updated successfully.');

        return redirect(route('contactus.index'));
    }

    /**
     * Remove the specified ContactUs from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $contactUs = $this->contactUsRepository->find($id);

        if (empty($contactUs)) {
            parent::dangerMessage('Contact Us not found');

            return redirect(route('contactus.index'));
        }

        $this->contactUsRepository->delete($id);

        parent::successMessage('Contact Us deleted successfully.');

        return redirect(route('contactus.index'));
    }
}
