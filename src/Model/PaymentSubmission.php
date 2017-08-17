<?php
/**
 * Created by PhpStorm.
 * User: max_m
 * Date: 15/08/2017
 * Time: 19:59
 */

namespace CurrencyCloud\Model;


class PaymentSubmission implements EntityInterface
{
    private $mt103;
    private $status;
    private $submission_ref;

    public function getId()
    {
        return "fake";
    }

    /**
     * @return mixed
     */
    public function getMt103()
    {
        return $this->mt103;
    }

    /**
     * @param mixed $mt103
     */
    public function setMt103($mt103)
    {
        $this->mt103 = $mt103;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getSubmissionRef()
    {
        return $this->submission_ref;
    }

    /**
     * @param mixed $submission_ref
     */
    public function setSubmissionRef($submission_ref)
    {
        $this->submission_ref = $submission_ref;
    }



}