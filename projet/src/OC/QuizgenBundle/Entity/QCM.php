<?php

namespace OC\QuizgenBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QCM
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OC\QuizgenBundle\Entity\QCMRepository")
 */
class QCM
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="question", type="string", length=255)
     */
    private $question;

    /**
     * @var string
     *
     * @ORM\Column(name="rep1", type="string", length=255)
     */
    private $rep1;

    /**
     * @var string
     *
     * @ORM\Column(name="rep2", type="string", length=255)
     */
    private $rep2;

    /**
     * @var string
     *
     * @ORM\Column(name="rep3", type="string", length=255)
     */
    private $rep3;

    /**
     * @var string
     *
     * @ORM\Column(name="rep4", type="string", length=255)
     */
    private $rep4;

    /**
     * @var integer
     *
     * @ORM\Column(name="bonneReponse", type="smallint")
     */
    private $bonneReponse;

    /**
     * @ORM\ManyToOne(targetEntity="OC\QuizgenBundle\Entity\Quiz", inversedBy="QCMs")
     * @ORM\JoinColumn(nullable=false)
     */
    private $quiz;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set question
     *
     * @param string $question
     * @return QCM
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return string 
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set rep1
     *
     * @param string $rep1
     * @return QCM
     */
    public function setRep1($rep1)
    {
        $this->rep1 = $rep1;

        return $this;
    }

    /**
     * Get rep1
     *
     * @return string 
     */
    public function getRep1()
    {
        return $this->rep1;
    }

    /**
     * Set rep2
     *
     * @param string $rep2
     * @return QCM
     */
    public function setRep2($rep2)
    {
        $this->rep2 = $rep2;

        return $this;
    }

    /**
     * Get rep2
     *
     * @return string 
     */
    public function getRep2()
    {
        return $this->rep2;
    }

    /**
     * Set rep3
     *
     * @param string $rep3
     * @return QCM
     */
    public function setRep3($rep3)
    {
        $this->rep3 = $rep3;

        return $this;
    }

    /**
     * Get rep3
     *
     * @return string 
     */
    public function getRep3()
    {
        return $this->rep3;
    }

    /**
     * Set rep4
     *
     * @param string $rep4
     * @return QCM
     */
    public function setRep4($rep4)
    {
        $this->rep4 = $rep4;

        return $this;
    }

    /**
     * Get rep4
     *
     * @return string 
     */
    public function getRep4()
    {
        return $this->rep4;
    }

    /**
     * Set bonneReponse
     *
     * @param integer $bonneReponse
     * @return QCM
     */
    public function setBonneReponse($bonneReponse)
    {
        $this->bonneReponse = $bonneReponse;

        return $this;
    }

    /**
     * Get bonneReponse
     *
     * @return integer 
     */
    public function getBonneReponse()
    {
        return $this->bonneReponse;
    }

    /**
     * Set quiz
     *
     * @param \OC\QuizgenBundle\Entity\Quiz $quiz
     * @return QCM
     */
    public function setQuiz(\OC\QuizgenBundle\Entity\Quiz $quiz)
    {
        $this->quiz = $quiz;

        return $this;
    }

    /**
     * Get quiz
     *
     * @return \OC\QuizgenBundle\Entity\Quiz 
     */
    public function getQuiz()
    {
        return $this->quiz;
    }
}
