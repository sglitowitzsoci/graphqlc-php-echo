<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: graphqlc/compiler/plugin.proto

namespace Graphqlc\Compiler\CodeGeneratorResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a single generated file.
 *
 * Generated from protobuf message <code>graphqlc.compiler.CodeGeneratorResponse.File</code>
 */
class File extends \Google\Protobuf\Internal\Message
{
    /**
     * The file name relative to the output directory. The name must
     * not contain "." or ".." components and must be relative. The
     * file cannot lie outside the output directory. "/" must used as
     * a path separtor, not "\".
     * If the name is ommited the content will be appended to the
     * previous file. This allows the generator to break large files
     * into small chunks, and allows the generated text to be streamed
     * back to graphqlc so that large files need not reside completely
     * in memory at one time.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * If non-empty, indicates that the named file should already exist,
     * and the content here is to be inserted into that file at a
     * defined insertion point. This feature allows a code generator to
     * extend the output produced by another code generator. The original
     * generator may provide insertion points by placing special
     * annotations in the file that look like:
     *  &#64;&#64;graphqlc_insertion_point(NAME)
     * The annotation can have arbitrary text before and after it on
     * the line which allows it to be placed in a comment. NAME should
     * be replaced with an identifier naming the point -- that is what
     * other generators will use as the insertion_point. Code inserted
     * at this point will be placed immediately above the line
     * containing the insertion point. This allows multiple insertions
     * to the same point to be added in order. The double-&#64; is intended
     * to make it unlikely that the generated code could contain things
     * that look like insertion points by accident.
     * Note that if the line containing the insertion point begins with
     * whitespace the same whitespace will be added to every line of the
     * inserted text. This is useful for langauges like Python where
     * indentation matters. In these languages the insertion point
     * comment should be indented the same amount as any inserted code
     * will need to be in order to work correctly in that context.
     * The code generator that generates the initial file and the one
     * which inserts into it must both run as part of a single invocation
     * of graphqlc. Code generators are executed in the order in which
     * they appear on the command line.
     * If |insertion_point| is present |name| must also be present.
     *
     * Generated from protobuf field <code>string insertion_point = 2;</code>
     */
    private $insertion_point = '';
    /**
     * The file contents.
     *
     * Generated from protobuf field <code>string content = 15;</code>
     */
    private $content = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The file name relative to the output directory. The name must
     *           not contain "." or ".." components and must be relative. The
     *           file cannot lie outside the output directory. "/" must used as
     *           a path separtor, not "\".
     *           If the name is ommited the content will be appended to the
     *           previous file. This allows the generator to break large files
     *           into small chunks, and allows the generated text to be streamed
     *           back to graphqlc so that large files need not reside completely
     *           in memory at one time.
     *     @type string $insertion_point
     *           If non-empty, indicates that the named file should already exist,
     *           and the content here is to be inserted into that file at a
     *           defined insertion point. This feature allows a code generator to
     *           extend the output produced by another code generator. The original
     *           generator may provide insertion points by placing special
     *           annotations in the file that look like:
     *            &#64;&#64;graphqlc_insertion_point(NAME)
     *           The annotation can have arbitrary text before and after it on
     *           the line which allows it to be placed in a comment. NAME should
     *           be replaced with an identifier naming the point -- that is what
     *           other generators will use as the insertion_point. Code inserted
     *           at this point will be placed immediately above the line
     *           containing the insertion point. This allows multiple insertions
     *           to the same point to be added in order. The double-&#64; is intended
     *           to make it unlikely that the generated code could contain things
     *           that look like insertion points by accident.
     *           Note that if the line containing the insertion point begins with
     *           whitespace the same whitespace will be added to every line of the
     *           inserted text. This is useful for langauges like Python where
     *           indentation matters. In these languages the insertion point
     *           comment should be indented the same amount as any inserted code
     *           will need to be in order to work correctly in that context.
     *           The code generator that generates the initial file and the one
     *           which inserts into it must both run as part of a single invocation
     *           of graphqlc. Code generators are executed in the order in which
     *           they appear on the command line.
     *           If |insertion_point| is present |name| must also be present.
     *     @type string $content
     *           The file contents.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Graphqlc\Compiler\Plugin::initOnce();
        parent::__construct($data);
    }

    /**
     * The file name relative to the output directory. The name must
     * not contain "." or ".." components and must be relative. The
     * file cannot lie outside the output directory. "/" must used as
     * a path separtor, not "\".
     * If the name is ommited the content will be appended to the
     * previous file. This allows the generator to break large files
     * into small chunks, and allows the generated text to be streamed
     * back to graphqlc so that large files need not reside completely
     * in memory at one time.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The file name relative to the output directory. The name must
     * not contain "." or ".." components and must be relative. The
     * file cannot lie outside the output directory. "/" must used as
     * a path separtor, not "\".
     * If the name is ommited the content will be appended to the
     * previous file. This allows the generator to break large files
     * into small chunks, and allows the generated text to be streamed
     * back to graphqlc so that large files need not reside completely
     * in memory at one time.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * If non-empty, indicates that the named file should already exist,
     * and the content here is to be inserted into that file at a
     * defined insertion point. This feature allows a code generator to
     * extend the output produced by another code generator. The original
     * generator may provide insertion points by placing special
     * annotations in the file that look like:
     *  &#64;&#64;graphqlc_insertion_point(NAME)
     * The annotation can have arbitrary text before and after it on
     * the line which allows it to be placed in a comment. NAME should
     * be replaced with an identifier naming the point -- that is what
     * other generators will use as the insertion_point. Code inserted
     * at this point will be placed immediately above the line
     * containing the insertion point. This allows multiple insertions
     * to the same point to be added in order. The double-&#64; is intended
     * to make it unlikely that the generated code could contain things
     * that look like insertion points by accident.
     * Note that if the line containing the insertion point begins with
     * whitespace the same whitespace will be added to every line of the
     * inserted text. This is useful for langauges like Python where
     * indentation matters. In these languages the insertion point
     * comment should be indented the same amount as any inserted code
     * will need to be in order to work correctly in that context.
     * The code generator that generates the initial file and the one
     * which inserts into it must both run as part of a single invocation
     * of graphqlc. Code generators are executed in the order in which
     * they appear on the command line.
     * If |insertion_point| is present |name| must also be present.
     *
     * Generated from protobuf field <code>string insertion_point = 2;</code>
     * @return string
     */
    public function getInsertionPoint()
    {
        return $this->insertion_point;
    }

    /**
     * If non-empty, indicates that the named file should already exist,
     * and the content here is to be inserted into that file at a
     * defined insertion point. This feature allows a code generator to
     * extend the output produced by another code generator. The original
     * generator may provide insertion points by placing special
     * annotations in the file that look like:
     *  &#64;&#64;graphqlc_insertion_point(NAME)
     * The annotation can have arbitrary text before and after it on
     * the line which allows it to be placed in a comment. NAME should
     * be replaced with an identifier naming the point -- that is what
     * other generators will use as the insertion_point. Code inserted
     * at this point will be placed immediately above the line
     * containing the insertion point. This allows multiple insertions
     * to the same point to be added in order. The double-&#64; is intended
     * to make it unlikely that the generated code could contain things
     * that look like insertion points by accident.
     * Note that if the line containing the insertion point begins with
     * whitespace the same whitespace will be added to every line of the
     * inserted text. This is useful for langauges like Python where
     * indentation matters. In these languages the insertion point
     * comment should be indented the same amount as any inserted code
     * will need to be in order to work correctly in that context.
     * The code generator that generates the initial file and the one
     * which inserts into it must both run as part of a single invocation
     * of graphqlc. Code generators are executed in the order in which
     * they appear on the command line.
     * If |insertion_point| is present |name| must also be present.
     *
     * Generated from protobuf field <code>string insertion_point = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setInsertionPoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->insertion_point = $var;

        return $this;
    }

    /**
     * The file contents.
     *
     * Generated from protobuf field <code>string content = 15;</code>
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * The file contents.
     *
     * Generated from protobuf field <code>string content = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setContent($var)
    {
        GPBUtil::checkString($var, True);
        $this->content = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(File::class, \Graphqlc\Compiler\CodeGeneratorResponse_File::class);

