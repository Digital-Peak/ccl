<?php
/**
 * @package    DPF
 * @author     Digital Peak http://www.digital-peak.com
 * @copyright  Copyright (C) 2007 - 2016 Digital Peak. All rights reserved.
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL
 */
namespace DPF\Content\Visitor\Basic;

/**
 * Interface to visit the elements.
 */
interface ElementVisitor
{

	/**
	 * Visit the Alert
	 *
	 * @param \DPF\Content\Element\Basic\Alert $alert
	 */
	public function visitAlert(\DPF\Content\Element\Basic\Alert $alert);

	/**
	 * Visit the Badge
	 *
	 * @param \DPF\Content\Element\Basic\Badge $badge
	 */
	public function visitBadge(\DPF\Content\Element\Basic\Badge $badge);

	/**
	 * Visit the Button
	 *
	 * @param \DPF\Content\Element\Basic\Button $button
	 */
	public function visitButton(\DPF\Content\Element\Basic\Button $button);

	/**
	 * Visit the Container
	 *
	 * @param \DPF\Content\Element\Basic\Container $container
	 */
	public function visitContainer(\DPF\Content\Element\Basic\Container $container);

	/**
	 * Visit the Custom
	 *
	 * @param \DPF\Content\Element\Basic\Custom $custom
	 */
	public function visitCustom(\DPF\Content\Element\Basic\Custom $custom);

	/**
	 * Visit the DescriptionDescription
	 *
	 * @param \DPF\Content\Element\Basic\Description\Description $descriptionDescription
	 */
	public function visitDescriptionDescription(\DPF\Content\Element\Basic\Description\Description $descriptionDescription);

	/**
	 * Visit the DescriptionTerm
	 *
	 * @param \DPF\Content\Element\Basic\Description\Term $descriptionTerm
	 */
	public function visitDescriptionTerm(\DPF\Content\Element\Basic\Description\Term $descriptionTerm);

	/**
	 * Visit the DescriptionList
	 *
	 * @param \DPF\Content\Element\Basic\DescriptionList $descriptionList
	 */
	public function visitDescriptionList(\DPF\Content\Element\Basic\DescriptionList $descriptionList);

	/**
	 * Visit the DescriptionListHorizontal
	 *
	 * @param \DPF\Content\Element\Basic\DescriptionListHorizontal $descriptionListHorizontal
	 */
	public function visitDescriptionListHorizontal(\DPF\Content\Element\Basic\DescriptionListHorizontal $descriptionListHorizontal);

	/**
	 * Visit the Font
	 *
	 * @param \DPF\Content\Element\Basic\Font $font
	 */
	public function visitFont(\DPF\Content\Element\Basic\Font $font);

	/**
	 * Visit the Form
	 *
	 * @param \DPF\Content\Element\Basic\Form $form
	 */
	public function visitForm(\DPF\Content\Element\Basic\Form $form);

	/**
	 * Visit the FormInput
	 *
	 * @param \DPF\Content\Element\Basic\Form\Input $formInput
	 */
	public function visitFormInput(\DPF\Content\Element\Basic\Form\Input $formInput);

	/**
	 * Visit the FormLabel
	 *
	 * @param \DPF\Content\Element\Basic\Form\Label $formLabel
	 */
	public function visitFormLabel(\DPF\Content\Element\Basic\Form\Label $formLabel);

	/**
	 * Visit the FormSelect
	 *
	 * @param \DPF\Content\Element\Basic\Form\Select $formSelect
	 */
	public function visitFormSelect(\DPF\Content\Element\Basic\Form\Select $formSelect);

	/**
	 * Visit the Grid
	 *
	 * @param \DPF\Content\Element\Basic\Grid $grid
	 */
	public function visitGrid(\DPF\Content\Element\Basic\Grid $grid);

	/**
	 * Visit the GridColumn
	 *
	 * @param \DPF\Content\Element\Basic\Grid\Column $gridColumn
	 */
	public function visitGridColumn(\DPF\Content\Element\Basic\Grid\Column $gridColumn);

	/**
	 * Visit the GridRow
	 *
	 * @param \DPF\Content\Element\Basic\Grid\Row $gridRow
	 */
	public function visitGridRow(\DPF\Content\Element\Basic\Grid\Row $gridRow);

	/**
	 * Visit the Heading
	 *
	 * @param \DPF\Content\Element\Basic\Heading $heading
	 */
	public function visitHeading(\DPF\Content\Element\Basic\Heading $heading);

	/**
	 * Visit the Icon
	 *
	 * @param \DPF\Content\Element\Basic\Icon $icon
	 */
	public function visitIcon(\DPF\Content\Element\Basic\Icon $icon);

	/**
	 * Visit the Image
	 *
	 * @param \DPF\Content\Element\Basic\Image $image
	 */
	public function visitImage(\DPF\Content\Element\Basic\Image $image);

	/**
	 * Visit the Link
	 *
	 * @param \DPF\Content\Element\Basic\Link $link
	 */
	public function visitLink(\DPF\Content\Element\Basic\Link $link);

	/**
	 * Visit the ListContainer
	 *
	 * @param \DPF\Content\Element\Basic\ListContainer $listContainer
	 */
	public function visitListContainer(\DPF\Content\Element\Basic\ListContainer $listContainer);

	/**
	 * Visit the ListItem
	 *
	 * @param \DPF\Content\Element\Basic\ListItem $listItem
	 */
	public function visitListItem(\DPF\Content\Element\Basic\ListItem $listItem);

	/**
	 * Visit the Meta
	 *
	 * @param \DPF\Content\Element\Basic\Meta $meta
	 */
	public function visitMeta(\DPF\Content\Element\Basic\Meta $meta);

	/**
	 * Visit the Paragraph
	 *
	 * @param \DPF\Content\Element\Basic\Paragraph $paragraph
	 */
	public function visitParagraph(\DPF\Content\Element\Basic\Paragraph $paragraph);

	/**
	 * Visit the Tab
	 *
	 * @param \DPF\Content\Element\Basic\Tab $tab
	 */
	public function visitTab(\DPF\Content\Element\Basic\Tab $tab);

	/**
	 * Visit the TabContainer
	 *
	 * @param \DPF\Content\Element\Basic\TabContainer $tabContainer
	 */
	public function visitTabContainer(\DPF\Content\Element\Basic\TabContainer $tabContainer);

	/**
	 * Visit the Table
	 *
	 * @param \DPF\Content\Element\Basic\Table $table
	 */
	public function visitTable(\DPF\Content\Element\Basic\Table $table);

	/**
	 * Visit the TableCell
	 *
	 * @param \DPF\Content\Element\Basic\Table\Cell $tableCell
	 */
	public function visitTableCell(\DPF\Content\Element\Basic\Table\Cell $tableCell);

	/**
	 * Visit the TableRow
	 *
	 * @param \DPF\Content\Element\Basic\Table\Row $tableRow
	 */
	public function visitTableRow(\DPF\Content\Element\Basic\Table\Row $tableRow);

	/**
	 * Visit the TextBlock
	 *
	 * @param \DPF\Content\Element\Basic\TextBlock $textBlock
	 */
	public function visitTextBlock(\DPF\Content\Element\Basic\TextBlock $textBlock);
}