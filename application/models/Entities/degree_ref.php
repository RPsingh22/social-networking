<?php
namespace Entities;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 */
class degree_ref
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", length=11)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @ORM\Column(type="integer", length=1, nullable=true)
     */
    private $status;

    /**
     * @ORM\Column(type="integer", length=11, nullable=true)
     */
    private $ilook_user_id;

    /**
     * @ORM\OneToMany(targetEntity="Entities\education_detail", mappedBy="education_detailsDegree")
     */
    private $degreesEducation_detail;
	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function getTitle() {
		return $this->title;
	}

	public function setTitle($title) {
		$this->title = $title;
	}

	public function getStatus() {
		return $this->status;
	}

	public function setStatus($status) {
		$this->status = $status;
	}

	public function getIlook_user_id() {
		return $this->ilook_user_id;
	}

	public function setIlook_user_id($ilook_user_id) {
		$this->ilook_user_id = $ilook_user_id;
	}

	public function getDegreesEducation_detail() {
		return $this->degreesEducation_detail;
	}

	public function setDegreesEducation_detail($degreesEducation_detail) {
		$this->degreesEducation_detail = $degreesEducation_detail;
	}

}