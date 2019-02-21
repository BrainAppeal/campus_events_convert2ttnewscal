<?php
/**
 * campus_events_convert2ttnewscal comes with ABSOLUTELY NO WARRANTY
 * See the GNU GeneralPublic License for more details.
 * https://www.gnu.org/licenses/gpl-2.0
 *
 * Copyright (C) 2019 Brain Appeal GmbH
 *
 * @copyright 2019 Brain Appeal GmbH (www.brain-appeal.com)
 * @license   GPL-2 (www.gnu.org/licenses/gpl-2.0)
 * @link      https://www.campus-events.com/
 */

namespace BrainAppeal\CampusEventsConvert2Ttnews\Domain\Model;

/**
 * TtNews
 */
class TtNews extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity implements \BrainAppeal\CampusEventsConnector\Domain\Model\ImportedModelInterface
{

    use \BrainAppeal\CampusEventsConnector\Domain\Model\ImportedModelTrait;

    /**
     * @var int
     */
    protected $type;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $bodytext;

    /**
     * @var string
     */
    protected $short;

    /**
     * @var int
     */
    protected $archivedate;

    /**
     * @var int
     */
    protected $datetime;

    /**
     * @var string
     */
    protected $externalUrl;

    /**
     * @var string
     */
    protected $newsFiles;

    /**
     * @var string
     */
    protected $images;

    /**
     * @var bool
     */
    protected $newsCalendarState;

    /**
     * @var int
     */
    protected $newsCalendarStartDate;

    /**
     * @var int
     */
    protected $newsCalendarEndDate;

    /**
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param int $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return TtNews
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getBodytext()
    {
        return $this->bodytext;
    }

    /**
     * @param string $bodytext
     * @return TtNews
     */
    public function setBodytext($bodytext)
    {
        $this->bodytext = $bodytext;

        return $this;
    }

    /**
     * @return string
     */
    public function getShort()
    {
        return $this->short;
    }

    /**
     * @param string $short
     * @return TtNews
     */
    public function setShort($short)
    {
        $this->short = $short;

        return $this;
    }

    /**
     * @return int
     */
    public function getArchivedate()
    {
        return $this->archivedate;
    }

    /**
     * @param int $archivedate
     * @return TtNews
     */
    public function setArchivedate($archivedate)
    {
        $this->archivedate = $archivedate;

        return $this;
    }

    /**
     * @return int
     */
    public function getDatetime()
    {
        return $this->datetime;
    }

    /**
     * @param int $datetime
     * @return TtNews
     */
    public function setDatetime($datetime)
    {
        $this->datetime = $datetime;

        return $this;
    }

    /**
     * @return string
     */
    public function getExternalUrl()
    {
        return $this->externalUrl;
    }

    /**
     * @param string $externalUrl
     * @return TtNews
     */
    public function setExternalUrl($externalUrl)
    {
        $this->externalUrl = $externalUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getNewsFiles()
    {
        return $this->newsFiles;
    }

    /**
     * @param string $newsFiles
     * @return TtNews
     */
    public function setNewsFiles($newsFiles)
    {
        $this->newsFiles = $newsFiles;

        return $this;
    }

    /**
     * @param string $newsFile
     */
    public function addNewsFile($newsFile)
    {
        $filesArray = explode(',', $this->getNewsFiles());
        $filesArray[] = $newsFile;
        $this->setNewsFiles(implode(',', $filesArray));
    }

    /**
     * @return string
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @param string $images
     * @return TtNews
     */
    public function setImages($images)
    {
        $this->images = $images;

        return $this;
    }

    /**
     * @param string $image
     */
    public function addImage($image)
    {
        $imagesArray = explode(',', $this->getImages());
        $imagesArray[] = $image;
        $this->setImages(implode(',', $imagesArray));
    }

    /**
     * @return bool
     */
    public function isNewsCalendarState()
    {
        return $this->newsCalendarState;
    }

    /**
     * @param bool $newsCalendarState
     */
    public function setNewsCalendarState($newsCalendarState)
    {
        $this->newsCalendarState = $newsCalendarState;
    }

    /**
     * @return int
     */
    public function getNewsCalendarStartDate()
    {
        return $this->newsCalendarStartDate;
    }

    /**
     * @param int $newsCalendarStartDate
     */
    public function setNewsCalendarStartDate($newsCalendarStartDate)
    {
        $this->newsCalendarStartDate = $newsCalendarStartDate;
    }

    /**
     * @return int
     */
    public function getNewsCalendarEndDate()
    {
        return $this->newsCalendarEndDate;
    }

    /**
     * @param int $newsCalendarEndDate
     */
    public function setNewsCalendarEndDate($newsCalendarEndDate)
    {
        $this->newsCalendarEndDate = $newsCalendarEndDate;
    }

}
